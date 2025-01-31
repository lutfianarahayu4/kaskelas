<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pembayaran extends Model
{
    use HasFactory;
    protected $table = 'pembayaran';
    
    protected $fillable = [
    'id_siswa',
    'tgl_bayar',
    'jumblah_bayar',
];

    public function siswa()
    {
        return $this->belongsTo(Siswa::class, 'id_siswa');
    }
}
