<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;

class UserController extends Controller
{
    public function create()
    {
        if (!Auth::check() || Auth::user()->role !== 0) {
    abort(403, 'Unauthorized');
}


        return view('create');
    }

    public function store(Request $request)
    {
        if (!Auth::check() || Auth::user()->role !== 0) {
    abort(403, 'Unauthorized');
}

        $request->validate([
        'username' => 'required|unique:users,username',
        'nama' => 'required|string|max:100',
        'telegram_id' => 'required|numeric|unique:users,telegram_id',
        'email' => 'required|email|unique:users,email',
        'password' => 'required|confirmed|min:6',
        'role' => 'required|in:0,1,2'
    ]);

        User::create([
        'username'     => $request->username,
        'nama'         => $request->nama,
        'telegram_id'  => $request->telegram_id,
        'email'        => $request->email,
        'password'     => Hash::make($request->password),
        'role'         => intval($request->role),
    ]);

        return redirect()->route('users.create')->with('success', 'User berhasil dibuat.');

}
}
