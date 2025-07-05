<?php

namespace App\Http\Controllers\Api;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\User;

class AuthController
{
    public function register(Request $request)
    {
        $validated = $request->validate([
            'name' => 'required|string',
            'email' => 'required|email|unique:users',
            'password' => 'required|string|min:6',
        ]);

        $user = User::create([
            'name' => $validated['name'],
            'email' => $validated['email'],
            'password' => bcrypt($validated['password']),
        ]);

        return response()->json([
            'message' => 'register sukses',
            'user' => $user,
        ]);
    }

    public function login(Request $request)
    {
        $credentials = $request->validate([
            'email' => 'required|email',
            'password' => 'required|string',
        ]);
        $remember = $request->boolean('remember', false);

        if (!Auth::attempt($credentials, $remember)) {
            return back()->withErrors([
                'email' => 'Email atau password salah.',
            ]);
        }

        $request->session()->regenerate();

        return redirect()->intended('/dashboard'); // Ganti dengan route tujuanmu
    }

    public function logout(Request $request)
    {

        $user = $request->user();


        if (!$user || !$user->currentAccessToken()) {
            return response()->json([
                'message' => 'Tidak ada token aktif. Anda sudah logout atau belum login.',
            ], 400); // 400 Bad Request
        }


        $user->currentAccessToken()->delete();

        return response()->json([
            'message' => 'Logout sukses',
        ], 200); // 200 OK
    }

}
