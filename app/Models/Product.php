<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Str;

class Product extends Model
{
    use HasFactory;

    protected $table = 'products';

    protected $fillable = [
        'major_id',
        'student_id',
        'name',
        'slug',
        'category',
        'description',
        'price',
        'hpp_cost',
        'stock',
        'status', // approved, pending, rejected
        'image_url',
        'unit_label',
        'is_featured',
    ];

    protected $casts = [
        'price' => 'float',
        'hpp_cost' => 'float',
        'stock' => 'integer',
        'is_featured' => 'boolean',
    ];

    public static function boot()
    {
        parent::boot();
        static::creating(function ($product) {
            if (empty($product->slug)) {
                $product->slug = Str::slug($product->name) . '-' . rand(100, 999);
            }
        });
    }

    public function major()
    {
        return $this->belongsTo(Major::class, 'major_id');
    }

    public function getMarginAttribute()
    {
        return max(0, $this->price - ($this->hpp_cost ?? 0));
    }

    public function getImageUrlAttribute($value)
    {
        if (!empty($value) && file_exists(public_path($value))) {
            return $value;
        }

        $map = [
            1 => 'images/products/prod_1_pos.webp',
            2 => 'images/products/prod_2_web.webp',
            3 => 'images/products/prod_3_kopi_bromo.webp',
            4 => 'images/products/prod_4_nastar.webp',
            5 => 'images/products/prod_5_agenda.webp',
            6 => 'images/products/prod_6_arsip.webp',
            7 => 'images/products/prod_7_akuntansi.webp',
            8 => 'images/products/prod_8_pajak.webp',
            9 => 'images/products/prod_9_bank.webp',
            10 => 'images/products/prod_10_literasi.webp',
            11 => 'images/products/prod_11_hoodie.webp',
            12 => 'images/products/prod_12_roti.webp',
            13 => 'images/products/prod_13_totebag.webp',
            14 => 'images/products/prod_14_servis.webp',
            15 => 'images/products/prod_15_kopisusu.webp',
        ];

        return $map[$this->id] ?? ($map[$this->major_id] ?? 'images/products/prod_12_roti.webp');
    }

    public function getGalleryImagesAttribute()
    {
        if ($this->id == 1 || str_contains(strtolower($this->name), 'roti')) {
            return [
                'images/products/prod_roti_croissant.webp',
                'images/products/prod_roti_thumb_1.webp',
                'images/products/prod_roti_thumb_2.webp',
                'images/products/prod_roti_thumb_3.webp',
            ];
        }

        $main = $this->image_url;
        return [
            $main,
            'images/products/prod_roti_thumb_1.webp',
            'images/products/prod_roti_thumb_2.webp',
            'images/products/prod_roti_thumb_4.webp',
        ];
    }

    public function getSellerNameAttribute()
    {
        $n = strtolower($this->name);
        if (str_contains($n, 'roti') || str_contains($n, 'croissant')) {
            return 'Rani (XII Kuliner 1)';
        }
        if (str_contains($n, 'kopi susu') || str_contains($n, 'aren')) {
            return 'Dimas (XII Boga 2)';
        }
        if (str_contains($n, 'pisang coklat') || str_contains($n, 'keripik')) {
            return 'Anisa (XI Kuliner 2)';
        }
        if (str_contains($n, 'nastar')) {
            return 'Siti (XII Kuliner 1)';
        }
        if (str_contains($n, 'robusta') || str_contains($n, 'bromo')) {
            return 'Rifki (XII Boga 1)';
        }
        if (str_contains($n, 'dimsum')) {
            return 'Farhan (XI Kuliner 1)';
        }
        if (str_contains($n, 'brownies')) {
            return 'Nadia (XII Kuliner 2)';
        }
        if (str_contains($n, 'baso aci')) {
            return 'Bayu (XI Kuliner 1)';
        }
        if (str_contains($n, 'matcha')) {
            return 'Zahra (XII Boga 2)';
        }
        if (str_contains($n, 'makaroni')) {
            return 'Iqbal (XI Kuliner 2)';
        }
        if (str_contains($n, 'bolen')) {
            return 'Putri (XII Kuliner 1)';
        }
        if (str_contains($n, 'thai tea')) {
            return 'Adit (XI Boga 1)';
        }
        return 'Siswa Tata Boga & Kuliner';
    }

    public function getStoreNameAttribute()
    {
        $n = strtolower($this->name);
        if (str_contains($n, 'roti') || str_contains($n, 'croissant')) {
            return 'Rani Artisan Bakery • Kota Probolinggo';
        }
        if (str_contains($n, 'kopi') || str_contains($n, 'matcha') || str_contains($n, 'thai')) {
            return 'SMEXA Barista Corner & Coffee Lab • Kota Probolinggo';
        }
        if (str_contains($n, 'keripik') || str_contains($n, 'makaroni') || str_contains($n, 'baso')) {
            return 'Dapur Snack PKWU Mandiri • Kota Probolinggo';
        }
        if (str_contains($n, 'nastar') || str_contains($n, 'brownies') || str_contains($n, 'bolen')) {
            return 'Pastry & Bakery BLUD SMEXA • Kota Probolinggo';
        }
        return 'Dapur Kuliner TEFA SMEXA • Kota Probolinggo';
    }

    public function getSoldCountAttribute()
    {
        $n = strtolower($this->name);
        if (str_contains($n, 'roti') || str_contains($n, 'croissant')) {
            return '142 terjual';
        }
        if (str_contains($n, 'kopi susu')) {
            return '98 terjual';
        }
        if (str_contains($n, 'keripik')) {
            return '85 terjual';
        }
        if (str_contains($n, 'nastar')) {
            return '76 terjual';
        }
        if (str_contains($n, 'robusta')) {
            return '64 terjual';
        }
        if (str_contains($n, 'dimsum')) {
            return '110 terjual';
        }
        if (str_contains($n, 'brownies')) {
            return '92 terjual';
        }
        if (str_contains($n, 'baso aci')) {
            return '120 terjual';
        }
        if (str_contains($n, 'matcha')) {
            return '70 terjual';
        }
        if (str_contains($n, 'makaroni')) {
            return '135 terjual';
        }
        if (str_contains($n, 'bolen')) {
            return '88 terjual';
        }
        if (str_contains($n, 'thai tea')) {
            return '65 terjual';
        }
        return (50 + (($this->id * 13) % 90)) . ' terjual';
    }

    public function getCategoryBadgeLabelAttribute()
    {
        $c = strtoupper($this->category);
        if (str_contains($c, 'RINGAN') || str_contains($c, 'SNACK')) {
            return 'MAKANAN RINGAN';
        }
        if (str_contains($c, 'KUE') || str_contains($c, 'PASTRY') || str_contains($c, 'BAKERY')) {
            return 'KUE & PASTRY';
        }
        if (str_contains($c, 'MINUM') || str_contains($c, 'KOPI') || str_contains($c, 'TEA')) {
            return 'MINUMAN';
        }
        return 'MAKANAN';
    }

    public function getCategoryBadgeClassAttribute()
    {
        $lbl = $this->category_badge_label;
        if ($lbl === 'MAKANAN') {
            return 'badge-cat-food';
        }
        if ($lbl === 'MINUMAN') {
            return 'badge-cat-drink';
        }
        if ($lbl === 'MAKANAN RINGAN') {
            return 'badge-cat-snack';
        }
        return 'badge-cat-pastry';
    }
}
