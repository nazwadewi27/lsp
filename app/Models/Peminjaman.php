<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Peminjaman extends Model
{
    use HasFactory;

    protected $fillable = [
        "tanggal_peminjaman",
        "kondisi_buku",
        "buku_id",
        "user_id",
        "kondisi_buku_saat_dipinjam",
        "kondisi_buku_saat_dikembalikan"
    ];

    protected $table = 'Peminjamans';

    public function user(){
        return $this->belongsTo(User::class);
    }

    public function buku(){
        return $this->belongsTo(Buku::class);
    }
}
