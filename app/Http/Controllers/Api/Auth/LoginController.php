<?php

namespace App\Http\Controllers\Api\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Validator;

class LoginController extends Controller
{

    public function __invoke(Request $request)
    {
        //validasi
        $validated = $request->validate([
            'email' => ['required'],
            'password' => ['required'],
        ]);

        if(!$token = auth()->guard('api')->attempt($request->only('email','password'))){
            return response()->json([
                'success' => false,
                'message' => 'Email atau Password Anda salah'
            ], 401);
        }

        //if auth success
        return response()->json([
            'success' => true,
            'data'    => auth()->guard('api')->user(),    
            'token'   => $token   
        ], 200);
    }
}
