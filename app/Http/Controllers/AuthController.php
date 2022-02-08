<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class AuthController extends Controller
{
    public function login(Request $request) {
        $user = User::where('nim', $request->nim)->first();
        if($user) {
            return response()->json(['user' => $user]);
        }
        return response()->json(['user' => []], 404);
    }

    public function logout(Request $request) {
        dd($request->all());
    }
}
