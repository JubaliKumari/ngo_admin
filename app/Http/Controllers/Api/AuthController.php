<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Application\CreaterUser;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class AuthController extends Controller
{
    public function login(Request $request)
    {
        $request->validate([
            'email' => 'required|email',
            'password' => 'required',
            'client' => 'nullable|in:app,website',
        ]);

        $user = CreaterUser::where('email', $request->email)->first();

        if (!$user || !Hash::check($request->password, $user->password)) {
            return response()->json([
                'success' => false,
                'message' => 'Invalid credentials',
            ], 401);
        }

        $client = $request->input('client', 'app');

        $abilities = $client === 'app'
            ? ['app:read', 'app:write']
            : ['website:read', 'website:write'];

        $token = $user->createToken("{$client}-token", $abilities)->plainTextToken;

        return response()->json([
            'success' => true,
            'message' => 'Login successful',
            'token' => $token,
            'client' => $client,
            'user' => $user,
        ]);
    }
}
