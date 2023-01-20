<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Model\Identitas;

class IdentitasController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $identitas = Identitas::all();

        if(!$identitas){
            return response()->json([
                'data' => "Not Found"
            ]);            
        }
        return response()->json([
            'data' => $identitas
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
        $identitas = Identitas::create($request->all());
        
        if(!$identitas){
            return response()->json([
                 'data' => 'Failed to store'
            ]);
        }
        return response()->json([
            'data' => 'Successfully to store'
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
        $identitas = Identitas::findOrFail($id);
        $identitas->update($request->all());

        return response()->json([
            'data' => $identitas
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
        $identitas = Identitas::find($id);
        $deleted = $identitas->delete();

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
