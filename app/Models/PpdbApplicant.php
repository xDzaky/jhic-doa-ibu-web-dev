<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PpdbApplicant extends Model
{
    use HasFactory;

    protected $table = 'ppdb_applicants';

    protected $fillable = [
        'registration_no',
        'nisn',
        'name',
        'email',
        'phone',
        'school_origin',
        'major_choice',
        'avg_score',
        'selection_path',
        'status', // Menunggu, Terverifikasi, Diterima
        'notes',
    ];

    protected $casts = [
        'avg_score' => 'float',
    ];

    public static function generateRegistrationNo()
    {
        $count = static::count() + 1;
        return 'REG-2026-' . str_pad($count, 3, '0', STR_PAD_LEFT);
    }
}
