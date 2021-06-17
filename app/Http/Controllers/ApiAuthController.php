<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Http\Response;
use App\User;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;

class ApiAuthController extends Controller
{
    //

    public function register(Request $request)
    {
        # code...

        // return 123;

        $validation = Validator::make($request->all(), [
            'name' => ['required'],
            'password' => ['min:8', 'confirmed'],
            'role' => ['required'],
            'email' => ['required','unique:users'],
        ]);

        $errors = $validation->errors();

        // return $errors->toJson();

        if ($validation->errors()->count() > 0) {
            return $errors;
        }else{

        
        
        // $request->validate([
        //     'name' => 'required',
        //     'role' => 'required',
        //     'email' => 'required','unique:users',
        //     'password' => 'required', 'string', 'min:8', 'confirmed',
            // 'amount' => 'required|numeric|min:99700|between:0,99.99',
            // 'number_of_accounts' => 'required|numeric|min:1|max:15',
            // 'file' => 'required|image|mimes:jpg,png,jpeg,gif,svg|max:2048',
            
        // ]);

        $user_code = "PE/".rand(11100,99999);

        $user =  User::create([
            'name' => $request->name,
            'email' => $request->email,
            'role' => $request->role,
            'user_code' => $user_code,
            'referer_code' => $request->referer_code??'system',
            'password' => Hash::make($request->password),
        ]);

 

        $token = $user->createToken('token-name', ['server:update'])->plainTextToken;

        $response = [
            'user' => $user,
            'token' => $token
        ];

        return response($response, 201);

        }

    }

    public function login(Request $request)
    {
        # code...


        $user = User::where('email', $request->email)->first();

        if ($user && Hash::check($request->password, $user->password)) {
            # code...
            
            $token = $user->createToken('token-name', ['server:update'])->plainTextToken;

            $response = [
                'user' => $user,
                'token' => $token
            ];

            return response($response, 201);


        }else{

            return response([
                'message' => 'Wrong credentials'
            ]);

        }



    }

    public function logout(Request $request)
    {
        
        auth()->user()->tokens()->delete();

        return[
            'message' => 'logged out'
        ];
    }
}
