<?php

namespace App\Http\Controllers;

use App\Models\User;
use Exception;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

// composer require php-open-source-saver/jwt-auth

// php artisan vendor:publish --provider="PHPOpenSourceSaver\JWTAuth\Providers\LaravelServiceProvider"

class ApiAccessController extends Controller
{   

    public function index()
    {
       return response()->json(["message"=>"Invalid or expired token"]);
    }

    public function login(Request $request)
    {   

        if(!$request->email || !$request->password){
             
            return response()->json(['error'=>'Email or password are empty'],400);
        }

        
        $credentials = [
            'email' => $request->email,
            'password' => $request->password,
        ];
        $token = Auth::guard('api')->attempt($credentials);
        if (!$token) {  
            return response()->json([
                'status' => 'error',
                'mensaje' => 'Not Authorized',
                'credentials' => $credentials,
            ], 401);
        }

        $user = Auth::guard('api')->user();

        return response()->json(['user_id' => $user->id, 'token' => $token], 200);
    }

    public function register(Request $request)
    {
        $data = $request->only('email', 'name');
        try {
            $user = User::create([
                 ...$data,
                'password' => Hash::make($request->input('password')),
                'created_at' => date('Y-m-d H:i:s'),
            ]);

            return response()->json(['user' => $user], 200);

        } catch (Exception $error) {
            return response()->json(['error' => 'Something went wrong'], 500);
        }

    }

    public function first_user(Request $request)
    {
        $userCount = User::select(['id'])->count();
        
        if($userCount > 0){
             return response()->json(['msg'=>'Unauthorized'],403);
        }

        $data = $request->only('email', 'name');
        try {
            $user = User::create([
                 ...$data,
                'password' => Hash::make($request->input('password')),
                'created_at' => date('Y-m-d H:i:s'),
            ]);

            return response()->json(['user' => $user], 200);

        } catch (Exception $error) {
            return response()->json(['error' => 'Something went wrong'], 500);
        }
    }
}
