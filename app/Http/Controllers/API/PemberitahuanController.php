<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class PemberitahuanController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $pemberitahuan = Pemberitahuan::all();
        if(!$pemberitahuan){
            return response()->json([
                'data' => 'not found',
            ]);
        }
        return response()->json([
            'data' => $pemberitahuan
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
        $pemberitahuan = Pemberitahuan::create($request->all());
        
        if(!$pemberitahuan){
            return response()->json([
                'data' => 'failed tp store data',
            ]);
        }
        return response()->json([
            'data' => $pemberitahuan
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
        $pemberitahuan = Pemberitahuan::findOrFail($id);
        $pemberitahuan->update($request->all());

        return response()->json([
            'data' => $pemberitahuan
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
        $pemberitahuan = Pemberitahuan::find($id);
        $deleted = $pemberitahuan->delete();

        if($deleted){
            return response()->json([
                'data' => 'delete successfully'
            ]);
        }
    }
}
