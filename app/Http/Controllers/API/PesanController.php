<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Pesan;

class PesanController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $pesan = Pesan::all();

        return response()->json([
            'data' => $pesan,
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
        $pesan = Pesan::create($request->all());

        if(!$pesan){
            return response()->json([
                'data' => 'failed to store'
            ]);
        }
        return response()->json([
            'data' => 'successfully stored'
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
        $penerbit = Penerbit::findOrFail($id);
        $penerbit->update($request->all());

            return response()->json([
                'data' => $penerbit
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
        $penerbit = Penerbit::findOrfail($id);
        $deleted = $penerbit->delete();

        if(!$deleted){
            return response()->json([
                'data' => 'failed to delete'
            ]);
            return response()->json([
                'data' => 'successfully data'
            ]);
        }
    }
}
