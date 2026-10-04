<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Order;
use App\Models\OrderItem;
use App\Models\Product;

class OrderSeeder extends Seeder
{
    public function run(): void
    {
        if (Order::count() > 0) {
            return;
        }

        $p1 = Product::where('id', 1)->first();
        $p2 = Product::where('id', 2)->first();
        $p3 = Product::where('id', 3)->first();

        // Order 1
        $o1 = Order::create([
            'order_code' => '#SMX-8821',
            'buyer_id' => 4,
            'buyer_name' => 'Muhammad Rizky Pratama',
            'buyer_phone' => '081234567891',
            'buyer_email' => 'calon.siswa@gmail.com',
            'buyer_address' => 'Jl. Mastrip No. 12, Probolinggo',
            'total_amount' => 150000,
            'blud_fee' => 2500,
            'delivery_method' => 'Ambil di Posko TEFA Lab SMKN 1 Probolinggo',
            'payment_method' => 'QRIS Instant Midtrans',
            'payment_status' => 'paid',
            'paid_at' => now()->subHours(3),
        ]);

        OrderItem::create([
            'order_id' => $o1->id,
            'product_id' => $p1 ? $p1->id : null,
            'product_name' => $p1 ? $p1->name : 'SMEXA POS Cloud (Lisensi 1 Tahun)',
            'price' => 150000,
            'hpp_cost' => 60000,
            'qty' => 1,
            'subtotal' => 150000,
        ]);

        // Order 2
        $o2 = Order::create([
            'order_code' => '#SMX-8822',
            'buyer_id' => null,
            'buyer_name' => 'Budi Santoso, S.Ds',
            'buyer_phone' => '081298765432',
            'buyer_email' => 'budi.santoso@smkn1probolinggo.sch.id',
            'buyer_address' => 'Ruang Guru DKV Kampus 1 SMKN 1 Probolinggo',
            'total_amount' => 350000,
            'blud_fee' => 2500,
            'delivery_method' => 'Kurir Siswa SMEXA Express (Antar Langsung)',
            'payment_method' => 'BCA Virtual Account',
            'payment_status' => 'paid',
            'paid_at' => now()->subHours(6),
        ]);

        OrderItem::create([
            'order_id' => $o2->id,
            'product_id' => $p2 ? $p2->id : null,
            'product_name' => $p2 ? $p2->name : 'Jasa Pembuatan Landing Page Bisnis UMKM',
            'price' => 350000,
            'hpp_cost' => 150000,
            'qty' => 1,
            'subtotal' => 350000,
        ]);

        // Order 3
        $o3 = Order::create([
            'order_code' => '#SMX-8819',
            'buyer_id' => null,
            'buyer_name' => 'Siti Nurhaliza',
            'buyer_phone' => '081345678901',
            'buyer_email' => 'siti.nurhaliza@gmail.com',
            'buyer_address' => 'Kanigaran, Probolinggo',
            'total_amount' => 76000,
            'blud_fee' => 0,
            'delivery_method' => 'Ambil di Kasir Mini Bank Sekolah',
            'payment_method' => 'Tunai Kasir Mini Bank',
            'payment_status' => 'paid',
            'paid_at' => now()->subDays(1),
        ]);

        OrderItem::create([
            'order_id' => $o3->id,
            'product_id' => $p3 ? $p3->id : null,
            'product_name' => $p3 ? $p3->name : 'Kopi Robusta Pegunungan Bromo 250g',
            'price' => 38000,
            'hpp_cost' => 22000,
            'qty' => 2,
            'subtotal' => 76000,
        ]);
    }
}
