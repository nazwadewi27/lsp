<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\User;


class AuthController extends Controller
{
    public function login(Request $request){
        if(!Auth::attempt($request->only('username','password')) && Auth::user()->verif === null){
            return response()->json([
                'message' => 'Unauthorized'
            ], 401);
        }
        elseif(Auth::attempt($request->only('username', 'passworddd')) && Auth::user()->verif === null){
            return response()->json([
                'message' => 'User is Unverified'
            ], 401);
        }

        $user = User::where('username', $request['username'])->firstOrFail();

        $token = $user->createToken('authh_Token')->plainTextToken;

        return response()->json([
            'message' => 'Hi' .$user->fullname . ', welcome to Home',
            'access_token' => $token,
            'token_type' => 'Bearer',
            'verif' => Auth::user()->verif
        ]);
    }

    public function logout(){
        auth()->user()->tokens()->delete();
        
        return [
            'message' => 'You have successfully logged out and the token wa successfully deleted'
        ];
    }


    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
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
        //
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
