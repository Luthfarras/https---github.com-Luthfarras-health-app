<?php

namespace App\Http\Controllers;

use App\Models\Artikel;
use App\Models\Kategori;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ArtikelController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

    public function beranda()
    {
        $data = Artikel::all();
        return view('beranda', compact('data'));
    }

    public function index()
    {
        $data = Artikel::all();
        return view('artikel', compact('data'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $kategori = Kategori::all();
        return view('addart', compact('kategori'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $userid = Auth::user()->id;
        $file = $request->file('foto')->store('artikel/foto');
        Artikel::create([
          'judul' => $request->judul,
          'foto' => $file,
          'isi' => $request->isi,
          'tanggal' => $request->tanggal,
          'kategori_id' => $request->kategori_id,
          'user_id' => $userid,
        ]);
        return redirect('artikel');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Artikel  $artikel
     * @return \Illuminate\Http\Response
     */
    public function show(Artikel $artikel)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Artikel  $artikel
     * @return \Illuminate\Http\Response
     */
    public function edit(Artikel $artikel)
    {
        $kategori = Kategori::all();
        return view('editart', compact('artikel', 'kategori'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Artikel  $artikel
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Artikel $artikel)
    {
        $userid = Auth::user()->id;
        if ($request->file('foto')) {
          $file = $request->file('foto')->store('artikel/foto');
          $artikel->update([
            'judul' => $request->judul,
            'foto' => $file,
            'isi' => $request->isi,
            'tanggal' => $request->tanggal,
            'kategori_id' => $request->kategori_id,
            'user_id' => $userid,
          ]);
        }else {
          $artikel->update([
            'judul' => $request->judul,
            'foto' => $artikel->foto,
            'isi' => $request->isi,
            'tanggal' => $request->tanggal,
            'kategori_id' => $request->kategori_id,
            'user_id' => $userid,
          ]);
        }
        return redirect('artikel');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Artikel  $artikel
     * @return \Illuminate\Http\Response
     */
    public function destroy(Artikel $artikel)
    {
        $artikel->delete();
        return redirect('artikel');
    }
}
