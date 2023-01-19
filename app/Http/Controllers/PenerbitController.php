<?php

namespace App\Http\Controllers;

use App\Models\Penerbit;
use Illuminate\Http\Request;

class PenerbitController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $penerbit = Penerbit::all();
        
        if(!$penerbit){
            return response()->json([
                'data' => 'not found',
            ]);
        }
        return response()->json([
            'data' => $penerbit
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
        $penerbit = Penerbit::create($request->all());

        if(!$penerbit){
            return response()->json([
                'data' => 'failed to store'
            ]);
        }
        return response()->json([
            'data' => 'successfully store data'
        ]); 
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Penerbit  $penerbit
     * @return \Illuminate\Http\Response
     */
    public function show(Penerbit $penerbit)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Penerbit  $penerbit
     * @return \Illuminate\Http\Response
     */
    public function edit(Penerbit $penerbit)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Penerbit  $penerbit
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Penerbit $penerbit)
    {
        $penerbit = Penerbit::findOrFail($id);
        $penerbi->update($request->all());

        return response()->json([
            'data' => $penerbit
        ]);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Penerbit  $penerbit
     * @return \Illuminate\Http\Response
     */
    public function destroy(Penerbit $penerbit)
    {
        $penerbit = Penerbit::findOrFail($id);
        $deleted = $penerbit->delete();

        if(!$deleted){
            return  response()->json([
                'data' => 'successfully deleted',
            ]);
        }
    }
}
