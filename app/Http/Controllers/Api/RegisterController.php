<?php

namespace App\Http\Controllers\Api;

use App\Models\User;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class RegisterController extends Controller
{
    /**
     * Handle the incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function __invoke(Request $request)
    {
        //set validator
        $validator = Validator::make($request->all(),[
            'name' => 'required',
            'email' => 'required|email|unique:users',// kurang huruf s mas, tq mass saya yg kurang telitii,, terimakasiiihhh bngtt, sama-sama mas, saya close y,, siapppp terimakasih
            'password' => 'required|min:6|confirmed'
        ]);
        //if validator fails
        if ($validator->fails()){
            return response()->json($validator->errors(), 422);
        }
        //create user
        $user = User::create([
            'name' => $request->name,
            'email' => $request->email,
            'password' => bcrypt($request->password)
        ]);
        //return response JSON user is created
        if($user){
            return response()->json([
                'success' =>true,
                'user' => $user,
            ], 201);
        }
        //return JSON procces insert failed
        return response()->json([
            'success' => false,
        ], 409);
    }
}
