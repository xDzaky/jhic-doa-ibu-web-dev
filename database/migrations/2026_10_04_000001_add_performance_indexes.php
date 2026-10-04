<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::table('products', function (Blueprint $table) {
            $table->index('status', 'idx_products_status');
            $table->index('category', 'idx_products_category');
        });

        Schema::table('orders', function (Blueprint $table) {
            $table->index('order_code', 'idx_orders_code');
            $table->index('payment_status', 'idx_orders_payment_status');
        });

        Schema::table('ppdb_applicants', function (Blueprint $table) {
            $table->index('nisn', 'idx_ppdb_nisn');
            $table->index('status', 'idx_ppdb_status');
        });
    }

    public function down(): void
    {
        Schema::table('products', function (Blueprint $table) {
            $table->dropIndex('idx_products_status');
            $table->dropIndex('idx_products_category');
        });

        Schema::table('orders', function (Blueprint $table) {
            $table->dropIndex('idx_orders_code');
            $table->dropIndex('idx_orders_payment_status');
        });

        Schema::table('ppdb_applicants', function (Blueprint $table) {
            $table->dropIndex('idx_ppdb_nisn');
            $table->dropIndex('idx_ppdb_status');
        });
    }
};
