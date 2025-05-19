<?php

namespace App\Http\Controllers;
use App\Models\Produk;
use App\Models\Kategori;
use App\Models\Merek;
use Illuminate\Http\Request;

class ProdukController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $produk = Produk::latest()->get();
        return view('produk.index',compact('produk'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $kategori = Kategori ::all();
        $merek     = Merek ::all();
        return view('produk.create',compact('kategori','merek'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
       $validated = $request->validate([
        'foto'   => 'required|mimes:jpg,png|max:1024',
        'nama_produk' => 'required|unique:produks',
        'id_kategori' => 'required',
        'id_merek'    => 'required',
        'harga'       => 'required|numeric',
        'stok'        => 'required|numeric',
        'deskripsi'   => 'required|string',
      ]);

       $produk = new Produk;
       if ($request->hasFile('foto')) {
           $img = $request->file('foto');
           $name = rand(1000, 9999). $img->getClientOriginalName();
           $img->move('storage/foto', $name);
           $produk->foto = $name;
           
       }
       $produk->nama_produk  =$request->nama_produk;
       $produk->id_kategori  = $request->id_kategori;
       $produk->id_merek     =$request->id_merek;
       $produk->harga        =$request->harga;
       $produk->stok         =$request->stok;
       $produk->deskripsi    =$request->deskripsi;
       $produk->save();

       return redirect()->route('produk.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $produk = Produk::findOrFail($id);
        return view('produk.show', compact('produk'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $produk   = Produk::findOrFail($id);
        $kategori = Kategori::all();
        $merek     = Merek::all();
        return view('produk.edit', compact('produk','kategori','merek'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $validated = $request->validate([
            'foto'   => 'required|mimes:jpg,png|max:1024',
            'nama_produk' => 'required|',
            'id_kategori' => 'required',
            'id_merek'    => 'required',
            'harga'       => 'required|numeric',
            'stok'        => 'required|numeric',
            'deskripsi'   => 'required|string',  
         ]);
    
           $produk = Produk::findOrFail($id);
           if ($request->hasFile('foto')) {
               $img = $request->file('foto');
               $name = rand(1000, 9999). $img->getClientOriginalName();
               $img->move('storage/foto', $name);
               $produk->foto = $name;
               
           }
           $produk->nama_produk  =$request->nama_produk;
           $produk->id_kategori  = $request->id_kategori;
           $produk->id_merek     =$request->id_merek;
           $produk->harga        =$request->harga;
           $produk->stok         =$request->stok;
           $produk->deskripsi    =$request->deskripsi;
           $produk->save();
          
           return redirect()->route('produk.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $produk = Produk::findOrFail($id);
        $produk->delete();
         return redirect()->route('produk.index')->with('success', 'data berhasil di hapus'); 
    }
}
