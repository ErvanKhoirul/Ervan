<?php
namespace App\Http\Controllers;

use App\Models\Produk;
use Illuminate\Http\Request;

class ProdukController extends Controller
{
    public function search(Request $request)
    {
        $query    = $request->input('query');
        $kategori = $request->input('nama_kategori');

        // Mulai query builder
        $produkQuery = Produk::query();

        // Filter berdasarkan nama produk jika ada query
        if ($query) {
            $produkQuery->where('nama_produk', 'LIKE', '%' . $query . '%');
        }

        // Filter berdasarkan kategori jika dipilih
        if ($kategori && $kategori !== 'all') {
            $produkQuery->where('nama_kategori', $kategori);
        }

        // Eksekusi query
        $produk = $produkQuery->get();
        
        // Kirim data ke view 
        return view('search', compact('produk', 'query', 'kategori'));
    }
}
