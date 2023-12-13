<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Hash;


class RegisterController extends Controller
{
    public function register(Request $request)
    {
        $validatedData = $request->validate([
            'name' => ['required', 'max:50', 'min:1'],
            'first_name' => ['required', 'max:50', 'min:1'],
            'last_name' => ['required', 'max:50', 'min:1'],
            'institution' => ['required', 'max:50', 'min:1'],
            'email' => ['required', 'email', 'unique:users,email'],
            'password' => ['required'],
        ]);

        $validatedData['password'] = hash::make($validatedData['password']);

        User::create($validatedData);

        return redirect('/');
    }
}
