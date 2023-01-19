<?php

namespace App\Http\Controllers;

use App\Models\Peminjaman;
use Illuminate\Http\Request;

class PeminjamanController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $peminjaman = Peminjaman::all();
        if(!$peminjaman){
            return response()->json([
                'data' => 'not found',
            ]);
        }
        return response()->json([
            'data' => $peminjaman
        ]);
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
        if(!$peminjaman){
            return response()->json([
                'data' => 'The data is failed to store',
            ]);
        }
        return response()->json([
            'data' => $peminjaman,
            'messages' => 'data successfully created'
        ]);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Peminjaman  $peminjaman
     * @return \Illuminate\Http\Response
     */
    public function show(Peminjaman $peminjaman)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Peminjaman  $peminjaman
     * @return \Illuminate\Http\Response
     */
    public function edit(Peminjaman $peminjaman)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Peminjaman  $peminjaman
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Peminjaman $peminjaman)
    {
        $peminjaman = Peminjaman::findOrFail($id);
        $peminjaman->update($request->all());

        return response()->json([
            'data' => $peminjaman,
            'message' => 'berhasil'
        ]);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Peminjaman  $peminjaman
     * @return \Illuminate\Http\Response
     */
    public function destroy(Peminjaman $peminjaman)
    {
        $peminjaman = Peminjaman::find($id);
        $deleted = $peminjaman->delete();

        if($deleted){
            return response()->json([
                'data' => 'delete successfully'
            ]);
        }
    }
}
