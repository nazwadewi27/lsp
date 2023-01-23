<?php

namespace App\Http\Controllers\user;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Peminjaman;
use App\Models\Buku;
use Illuminate\Support\Facades\Auth;

class PengembalianController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $judul = Peminjaman::where('user_id' , Auth::user()->id)
                            ->where('tanggal_pengembalian' , null)
                            ->get();

        return view('user.pengembalian' , compact('judul'));
    }

    public function riwayatPengembalian()
    {
        $pengembalian = Peminjaman::where('user_id', Auth::user()->id)->get();

        return view('user.riwayat_pengembalian', compact('pengembalian'));
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
        $cek = Peminjaman::where('user_id' , $request->user_id)
                        ->where('buku_id' , $request->buku_id)
                        ->first();

        $cek->update([
            'tanggal_pengembalian'  => $request->tanggal_pengembalian,
            'kondisi_buku_saat_dikembalikan' => $request->kondisi_buku_saat_dikembalikan
        ]);

        if ($request->kondisi_buku_saat_dikembalikan == 'baik') {
            $buku = Buku::where('id' , $request->buku_id)->first();

            $buku->update([
                'j_buku_baik' => $buku->j_buku_baik + 1

            ]);

            $cek->update([
                'denda' => 0
            ]);
        }

        if ($request->kondisi_buku_saat_dikembalikan == 'rusak') {
            $buku = Buku::where('id' , $request->buku_id)->first();

            $buku->update([
                'j_buku_rusak' => $buku->j_buku_rusak + 1

            ]);

            $cek->update([
                'denda' => 20000
            ]);
        }

        if ($request->kondisi_buku_saat_dikembalikan == 'hilang') {
            $cek->update([
                'denda' => 200000
            ]);
        }

        return redirect()->route('user.riwayat.pengembalian');
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
