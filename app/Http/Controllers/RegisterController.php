<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use App\Models\User;

class RegisterController extends Controller
{
    public function registerStep1(Request $request)
{
    $request->validate([
        'name' => 'required|string|max:255',           
        'email_or_phone' => 'required|string|unique:users,email',
        'password' => 'required|string|min:8|confirmed',
    ]);

    User::create([
        'name' => $request->name,                      
        'email' => $request->email_or_phone,
        'password' => Hash::make($request->password),
    ]);

   return redirect()->to('/login2');
}
}