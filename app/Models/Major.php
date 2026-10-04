<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Major extends Model
{
    use HasFactory;

    protected $table = 'majors';

    protected $fillable = [
        'code',
        'name',
        'tagline',
        'description',
        'quota_seats',
        'rombel_count',
        'head_of_program',
        'featured_partner',
    ];

    public function products()
    {
        return $this->hasMany(Product::class, 'major_id');
    }
}
