<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;
use App\Models\Order;
use App\Models\OrderItem;
use App\Models\Major;

class SmexamallController extends Controller
{
    /**
     * Katalog Produk SMEXAMALL (Real Database Products)
     */
    public function index(Request $request)
    {
        $category = $request->get('cat', 'all');
        $search = $request->get('q', '');

        $query = Product::where('status', 'approved');

        if ($category !== 'all' && !empty($category)) {
            $query->where('category', 'LIKE', '%' . $category . '%');
        }

        if (!empty($search)) {
            $query->where(function ($q) use ($search) {
                $q->where('name', 'LIKE', '%' . $search . '%')
                  ->orWhere('description', 'LIKE', '%' . $search . '%')
                  ->orWhere('category', 'LIKE', '%' . $search . '%');
            });
        }

        $products = $query->orderBy('id', 'asc')->get();

        // Kategori terdaftar di sistem (Fokus Makanan, Minuman, Makanan Ringan, Pastry)
        $categories = ['Makanan', 'Minuman', 'Makanan Ringan', 'Kue & Pastry'];

        $cart = session('cart', []);
        $cartCount = array_sum(array_column($cart, 'qty'));

        return view('smexamall.index', compact('products', 'categories', 'category', 'search', 'cartCount'));
    }

    /**
     * Detail Produk & Kaitan Kurikulum PKWU
     */
    public function product($id = null)
    {
        if ($id) {
            $product = Product::where('id', $id)->orWhere('slug', $id)->first();
        } else {
            $product = Product::where('status', 'approved')
                ->where('name', 'LIKE', '%Roti Sisir%')
                ->first() ?? Product::where('status', 'approved')->first();
        }

        if (!$product) {
            return redirect()->route('smexamall.index')->with('error', 'Produk tidak ditemukan.');
        }

        $relatedProducts = Product::where('status', 'approved')
            ->where('id', '!=', $product->id)
            ->limit(4)
            ->get();

        $cart = session('cart', []);
        $cartCount = array_sum(array_column($cart, 'qty'));

        return view('smexamall.product', compact('product', 'relatedProducts', 'cartCount'));
    }

    /**
     * Tambah Produk ke Keranjang (Real Session Cart)
     */
    public function addToCart(Request $request)
    {
        $productId = $request->input('product_id');
        $qty = max(1, (int)$request->input('qty', 1));

        $product = Product::findOrFail($productId);

        $cart = session('cart', []);

        if (isset($cart[$productId])) {
            $cart[$productId]['qty'] += $qty;
        } else {
            $cart[$productId] = [
                'id' => $product->id,
                'name' => $product->name,
                'price' => (float)$product->price,
                'hpp_cost' => (float)($product->hpp_cost ?? 0),
                'category' => $product->category,
                'qty' => $qty,
                'unit_label' => $product->unit_label ?? 'unit',
                'image_url' => $product->image_url,
            ];
        }

        session(['cart' => $cart]);

        $totalCount = array_sum(array_column($cart, 'qty'));

        if ($request->ajax() || $request->wantsJson()) {
            return response()->json([
                'success' => true,
                'message' => 'Produk "' . $product->name . '" berhasil ditambahkan ke keranjang!',
                'cartCount' => $totalCount
            ]);
        }

        return redirect()->route('smexamall.cart')->with('success', 'Produk berhasil ditambahkan ke keranjang!');
    }

    /**
     * Tampilkan Keranjang Belanja Siswa
     */
    public function cart()
    {
        $cart = session('cart', []);

        $subtotal = 0;
        foreach ($cart as $item) {
            $subtotal += ($item['price'] * $item['qty']);
        }

        $bludFee = 2500;
        $grandTotal = $subtotal > 0 ? ($subtotal + $bludFee) : 0;

        return view('smexamall.cart', compact('cart', 'subtotal', 'bludFee', 'grandTotal'));
    }

    /**
     * Update Kuantitas / Hapus Item dari Keranjang
     */
    public function updateCart(Request $request)
    {
        $productId = $request->input('product_id');
        $action = $request->input('action'); // increase, decrease, remove

        $cart = session('cart', []);

        if (isset($cart[$productId])) {
            if ($action === 'increase') {
                $cart[$productId]['qty'] += 1;
            } elseif ($action === 'decrease') {
                $cart[$productId]['qty'] -= 1;
                if ($cart[$productId]['qty'] <= 0) {
                    unset($cart[$productId]);
                }
            } elseif ($action === 'remove') {
                unset($cart[$productId]);
            }
        }

        session(['cart' => $cart]);

        return redirect()->route('smexamall.cart')->with('success', 'Keranjang berhasil diperbarui.');
    }

    /**
     * Halaman Checkout
     */
    public function checkout()
    {
        $cart = session('cart', []);

        if (empty($cart)) {
            return redirect()->route('smexamall.index')->with('info', 'Keranjang belanja Anda kosong.');
        }

        $subtotal = 0;
        foreach ($cart as $item) {
            $subtotal += ($item['price'] * $item['qty']);
        }

        $bludFee = 2500;
        $grandTotal = $subtotal + $bludFee;

        $authUser = session('auth_user', null);

        return view('smexamall.checkout', compact('cart', 'subtotal', 'bludFee', 'grandTotal', 'authUser'));
    }

    /**
     * Proses Pemesanan Nyata (Simpan ke SQLite: Order & OrderItems, Kurangi Stok)
     */
    public function processCheckout(Request $request)
    {
        $cart = session('cart', []);

        if (empty($cart)) {
            return redirect()->route('smexamall.index')->with('error', 'Keranjang kosong!');
        }

        $validated = $request->validate([
            'buyer_name' => 'required|string|max:255',
            'buyer_phone' => 'required|string|max:20',
            'buyer_email' => 'nullable|email|max:255',
            'buyer_address' => 'nullable|string|max:500',
            'delivery_method' => 'required|string|max:255',
            'payment_method' => 'required|string|max:255',
        ]);

        $subtotal = 0;
        foreach ($cart as $item) {
            $subtotal += ($item['price'] * $item['qty']);
        }

        $bludFee = 2500;
        $grandTotal = $subtotal + $bludFee;
        $orderCode = Order::generateOrderCode();

        $order = Order::create([
            'order_code' => $orderCode,
            'buyer_id' => session('auth_user.id'),
            'buyer_name' => $validated['buyer_name'],
            'buyer_phone' => $validated['buyer_phone'],
            'buyer_email' => $validated['buyer_email'] ?? 'konsumen@smexamall.sch.id',
            'buyer_address' => $validated['buyer_address'] ?? 'Posko Kampus SMKN 1 Probolinggo',
            'total_amount' => $grandTotal,
            'blud_fee' => $bludFee,
            'delivery_method' => $validated['delivery_method'],
            'payment_method' => $validated['payment_method'],
            'payment_status' => 'paid',
            'paid_at' => now(),
        ]);

        // Simpan setiap item pesanan & kurangi stok produk di database
        foreach ($cart as $item) {
            OrderItem::create([
                'order_id' => $order->id,
                'product_id' => $item['id'],
                'product_name' => $item['name'],
                'price' => $item['price'],
                'hpp_cost' => $item['hpp_cost'],
                'qty' => $item['qty'],
                'subtotal' => $item['price'] * $item['qty'],
            ]);

            // Kurangi stok di database
            $prod = Product::find($item['id']);
            if ($prod) {
                $prod->decrement('stock', $item['qty']);
            }
        }

        // Kosongkan keranjang belanja
        session()->forget('cart');

        return redirect()->route('portal.siswa')->with('success', 'Pembayaran transaksi ' . $orderCode . ' berhasil diproses! Pesanan Anda telah tercatat dan siap dipersiapkan oleh siswa wirausaha.');
    }
}
