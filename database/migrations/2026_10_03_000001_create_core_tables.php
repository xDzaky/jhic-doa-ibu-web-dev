<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('majors', function (Blueprint $table) {
            $table->id();
            $table->string('code')->unique();
            $table->string('name');
            $table->string('tagline')->nullable();
            $table->text('description')->nullable();
            $table->integer('quota_seats')->default(0);
            $table->integer('rombel_count')->default(0);
            $table->string('head_of_program')->nullable();
            $table->string('featured_partner')->nullable();
            $table->timestamps();
        });

        Schema::create('products', function (Blueprint $table) {
            $table->id();
            $table->foreignId('major_id')->nullable();
            $table->foreignId('student_id')->nullable();
            $table->string('name');
            $table->string('slug')->nullable()->unique();
            $table->string('category');
            $table->text('description')->nullable();
            $table->decimal('price', 12, 2)->default(0);
            $table->decimal('hpp_cost', 12, 2)->nullable()->default(0);
            $table->integer('stock')->default(0);
            $table->string('status')->default('approved'); // approved, pending, rejected
            $table->string('image_url')->nullable();
            $table->string('unit_label')->nullable()->default('pcs');
            $table->boolean('is_featured')->default(false);
            $table->timestamps();
        });

        Schema::create('orders', function (Blueprint $table) {
            $table->id();
            $table->string('order_code')->unique();
            $table->foreignId('buyer_id')->nullable();
            $table->string('buyer_name');
            $table->string('buyer_phone')->nullable();
            $table->string('buyer_email')->nullable();
            $table->text('buyer_address')->nullable();
            $table->decimal('total_amount', 12, 2)->default(0);
            $table->decimal('blud_fee', 12, 2)->default(0);
            $table->string('delivery_method')->nullable();
            $table->string('payment_method')->nullable();
            $table->string('payment_status')->default('pending'); // paid, pending, failed
            $table->string('snap_token')->nullable();
            $table->timestamp('paid_at')->nullable();
            $table->timestamps();
        });

        Schema::create('order_items', function (Blueprint $table) {
            $table->id();
            $table->foreignId('order_id');
            $table->foreignId('product_id')->nullable();
            $table->string('product_name');
            $table->decimal('price', 12, 2)->default(0);
            $table->decimal('hpp_cost', 12, 2)->default(0);
            $table->integer('qty')->default(1);
            $table->decimal('subtotal', 12, 2)->default(0);
            $table->timestamps();
        });

        Schema::create('ppdb_applicants', function (Blueprint $table) {
            $table->id();
            $table->string('registration_no')->unique();
            $table->string('nisn');
            $table->string('name');
            $table->string('email')->nullable();
            $table->string('phone')->nullable();
            $table->string('school_origin');
            $table->string('major_choice');
            $table->decimal('avg_score', 5, 2);
            $table->string('selection_path')->nullable();
            $table->string('status')->default('Menunggu'); // Menunggu, Terverifikasi, Diterima
            $table->text('notes')->nullable();
            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('ppdb_applicants');
        Schema::dropIfExists('order_items');
        Schema::dropIfExists('orders');
        Schema::dropIfExists('products');
        Schema::dropIfExists('majors');
    }
};
