<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    use HasFactory;

    protected $table = 'orders';

    protected $fillable = [
        'order_code',
        'buyer_id',
        'buyer_name',
        'buyer_phone',
        'buyer_email',
        'buyer_address',
        'total_amount',
        'blud_fee',
        'delivery_method',
        'payment_method',
        'payment_status', // paid, pending, failed
        'snap_token',
        'paid_at',
    ];

    protected $casts = [
        'total_amount' => 'float',
        'blud_fee' => 'float',
        'paid_at' => 'datetime',
    ];

    public function items()
    {
        return $this->hasMany(OrderItem::class, 'order_id');
    }

    public static function generateOrderCode()
    {
        return '#SMX-' . rand(1000, 9999);
    }
}
