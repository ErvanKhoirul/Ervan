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

    


}
