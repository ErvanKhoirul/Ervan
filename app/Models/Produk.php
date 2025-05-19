<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Produk extends Model
{
    use HasFactory;
    protected $fillable = ['id', 'nama_produk', 'harga','stok','id_kategori','foto','id_merek','deskripsi'];
    public $timestamp = true;

    //relasi ke tabel pengguna
    public function kategori()
    {
        return $this->belongsTo(Kategori::class, 'id_kategori');
    }
    public function merek()
    {
        return $this->belongsTo(Merek::class, 'id_merek');
    }
  };
  





                             