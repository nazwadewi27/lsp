<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Buku;

class BukuController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $buku = Buku::all();
        if(!$buku){
            return response()->json([
                'data' => 'not found'
            ]);
        }
        return response()->json([
            'data' => $buku
        ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $buku = Buku::create($request->all());
        if(!$buku){
            return response()->json([
                'data' => 'failed to store'
            ]);
        }
        return response()->json([
            'data' => $buku
        ]);
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
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $buku = Buku::findOrFail($id);
        $buku->update($request->all());

        if(!$buku){
            return response()->json([
                'data' => 'failed to update'
            ]);
        }
        return response()->json([
            'data' => $buku
        ]);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $buku = Buku::findOrFail($id);
        $deleted = $buku->delete();

        if(!$deleted){
            return response()->json([
                'data' => 'failed to delete'
            ]);
            return response()->json([
                'data' => 'successfully delete data'
            ]);
        }
    }
}
