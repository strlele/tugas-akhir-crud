<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Alamat extends Model
{
    use HasFactory;

    protected $fillable = [
        'user_id', 'alamat_lengkap', 'kota', 'provinsi', 'kode_pos'
    ];

    // Relasi ke model User (alamat dimiliki oleh user)
    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
