<?php

namespace App\Http\Controllers;
use App\Models\Produk;
use Illuminate\Http\Request;

class FrontController extends Controller
{
    public function index()
    {
    $produk = Produk::all();
    return view('welcome', compact('produk'));
    }
    public function detail($id)
{
    $produk = Produk::findOrFail($id);
    return view('detail', compact('produk'));
}

public function about()
{
    $produk = Produk::all(); 
    return view('about', compact('produk'));
}

public function search(Request $request)
{
    $query = $request->input('query');
    $kategori = $request->input('nama_kategori');

    $produkQuery = Produk::query();

    if ($query) {
        $produkQuery->where('nama_produk', 'LIKE', "%{$query}%");
    }

    if ($kategori && $kategori !== 'all') {
        $produkQuery->where('nama_kategori', $kategori);
    }

    $produk = $produkQuery->get();

    return view('search', compact('produk', 'query'));
}
public function beranda()
{
    $produk = Produk::all();
    return view('beranda', compact('produk'));
}



}
