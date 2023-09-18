<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;

class AuthController extends Controller
{
    public function register(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'first_name' => 'required|string|max:255',
            'email' => 'required|string|max:255|unique:tb_users',
            'password' => 'required|string|min:8',
            'username' => 'required|string|max:255|unique:tb_users'
        ]);

        if ($validator->fails()) {
            return response()->json($validator->errors());
        }

        $user = User::create([
            'first_name' => $request->first_name,
            'email' => $request->email,
            'password' => Hash::make($request->password),
            'username' => $request->username,
        ]);
       // var_dump($request->first_name);die();

        $token = $user->createToken('auth_token')->plainTextToken;

        return response()->json([
            'data' => $user,
            'access_token' => $token,
            'token_type' => 'Bearer'
        ]);
    }

    public function login(Request $request)
    {
        if (! Auth::attempt($request->only('email', 'password'))) {
            return response()->json([
                'message' => 'Unauthorized'
            ], 401);
        }

        $user = User::where('email', $request->email)->firstOrFail();

        $token = $user->createToken('auth_token')->plainTextToken;

        return response()->json([
            'message' => 'Login success',
            'access_token' => $token,
            'token_type' => 'Bearer',
            'user_id' => $user->id,
            'user_name' => $user->username,
            'group_id' => $user->group_id
        ]);
    }

    public function logout()
    {
        Auth::user()->tokens()->delete();
        return response()->json([
            'message' => 'logout success'
        ]);
    }
}