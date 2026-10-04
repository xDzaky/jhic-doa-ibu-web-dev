<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;
use App\Models\Order;
use App\Models\OrderItem;
use App\Models\Major;

class SellerController extends Controller
{
    /**
     * Dashboard Seller Centre Siswa (Real SQLite Data)
     */
    public function index()
    {
        // Ambil produk dari database
        $products = Product::latest()->get();

        // Ambil pesanan masuk dari database
        $orders = Order::with('items')->latest()->get();

        // Hitung metrik keuangan real dari database
        $totalOmzet = Order::where('payment_status', 'paid')->sum('total_amount');
        $availableBalance = $totalOmzet * 0.70; // 70% hak siswa / margin laba
        $pendingOrdersCount = Order::where('status', 'pending')->count();
        $activeProductsCount = Product::where('status', 'approved')->count();
        $pendingProductsCount = Product::where('status', 'pending_review')->count();
        $lowStockProductsCount = Product::where('stock', '<', 5)->count();

        $stats = [
            'total_omzet' => $totalOmzet,
            'available_balance' => $availableBalance,
            'pending_orders' => $pendingOrdersCount,
            'active_products' => $activeProductsCount,
            'pending_products' => $pendingProductsCount,
            'low_stock_products' => $lowStockProductsCount,
        ];

        return view('seller.index', compact('products', 'orders', 'stats'));
    }

    /**
     * Ajukan Produk Baru ke Database (Status: Pending Review Guru)
     */
    public function storeProduct(Request $request)
    {
        $validated = $request->validate([
            'name' => 'required|string|max:255',
            'category' => 'required|string|max:100',
            'stock' => 'required|integer|min:1',
            'hpp_cost' => 'required|numeric|min:0',
            'price' => 'required|numeric|min:0',
            'description' => 'required|string|max:1000',
        ]);

        $rplMajor = Major::where('code', 'RPL')->first();

        $product = Product::create([
            'major_id' => $rplMajor ? $rplMajor->id : 1,
            'student_id' => 3, // Rani Safitri / Ahmad Fadhil
            'name' => $validated['name'],
            'category' => $validated['category'],
            'stock' => $validated['stock'],
            'hpp_cost' => $validated['hpp_cost'],
            'price' => $validated['price'],
            'description' => $validated['description'],
            'status' => 'pending_review', // Menunggu Review Guru Pembimbing
            'unit_label' => 'unit',
            'is_featured' => false,
        ]);

        if ($request->ajax() || $request->wantsJson()) {
            return response()->json([
                'success' => true,
                'message' => 'Produk "' . $product->name . '" berhasil diajukan dan disimpan di database! Notifikasi masuk ke antrean Guru Pembimbing.',
                'product' => $product
            ]);
        }

        return redirect()->route('seller.index')->with('success', 'Produk "' . $product->name . '" berhasil diajukan untuk verifikasi Guru Pembimbing!');
    }

    /**
     * Update Stok Produk Cepat (Real SQLite Update)
     */
    public function updateStock(Request $request, $id)
    {
        $product = Product::findOrFail($id);
        $delta = (int)$request->input('delta', 0);
        $newStock = max(0, $product->stock + $delta);

        $product->update(['stock' => $newStock]);

        return response()->json([
            'success' => true,
            'new_stock' => $newStock,
            'message' => 'Stok produk ' . $product->name . ' berhasil diubah menjadi ' . $newStock
        ]);
    }

    /**
     * Ubah Status Pesanan (Fulfillment)
     */
    public function updateOrderStatus(Request $request, $id)
    {
        $order = Order::findOrFail($id);
        $status = $request->input('status', 'ready_for_pickup');

        $order->update(['status' => $status]);

        return response()->json([
            'success' => true,
            'status' => $status,
            'message' => 'Status pesanan ' . $order->order_code . ' berhasil diperbarui!'
        ]);
    }
}
