<?php

namespace App\Http\Controllers\user;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\Peminjaman;
use App\Models\Buku;

class PeminjamanController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function riwayatPeminjaman(){
        $peminjaman = Peminjaman::where('user_id', Auth::user()->id)->get();

        return view('user.riwayat_peminjaman', compact('peminjaman'));
    }

    public function indexForm(){
        $buku = Buku::all();

        return view('user.form_peminjaman', compact('buku'));
    }

    public function form(Request $request)
    {
        $buku = Buku::all();
        $buku_id = $request->buku_id;

        return view('user.form_peminjaman' , compact('buku' , 'buku_id'));
    }

    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $peminjaman = Peminjaman::create($request->all());
        $buku = Buku::where('id', $request->buku_id)->first();

        if($request->kondisi_buku_saat_dipinjam == 'baik'){
            $buku->update([
                'j_buku_baik' => $buku->j_buku_baik-1
            ]);
        }

        if($request->kondisi_buku_saat_dipinjam == 'rusak'){
            $buku->update([
                'j_buku_rusak' => $buku->j_buku_rusak-1
            ]);
        }

        if($peminjaman){
            return redirect()->route('user.riwayat.peminjaman')->with('status', 'succses')->with('msg', 'berhasil menambah data');
        }
        return redirect()->back()->with('status', 'danger')->with('msg', 'gagal menambah data');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
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
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
