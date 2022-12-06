<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Guru extends Model
{
    use HasFactory;

    protected $fillable = [
        'nama',
        'sekolah_id'
    ];

    public function sekolah()
    {
        return $this->belongsTo(Sekolah::class);
    }
}
