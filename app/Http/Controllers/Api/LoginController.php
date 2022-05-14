<?php

namespace App\Http\Controllers\Api;

use App\Models\Client;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Support\Facades\Hash;
use App\Traits\ApiResponser;

class LoginController extends Controller
{

    public function __construct()
    {
        $this->middleware('guest:client')->except('logout');
    }


    public function login(Request $request)
    {
        $request->validate([
            'email' => 'required|string',
            'password' => 'required|string',
            'name' => 'required|string',
        ]);


        // check email
        $client = User::where('email', $request->email)->first();

        // check passowrd
        if(!$client || !Hash::check($request->password, $client->password)) {

            return $this->error('The provided credentials are incorrect.', 401);
        }

        return $this->success([
            'token' => $client->createToken($request->device_name)->plainTextToken,
            'client' => $client,
        ],'You are logged successfully');

    }

    public function logout(Request $request)
    {
        $request->user()->tokens()->delete();

        return [
            'message' => 'Tokens Revoked'
        ];
    }
}
