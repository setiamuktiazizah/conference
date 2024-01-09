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

        $user = User::create($validatedData);
        $user->roleOwner()->create(['role_id' => 4, 'created_by' => $user->id]);

        return redirect('/');
    }

    public function registerpartner(Request $request)
    {
        $validatedData = $request->validate([
            'name' => ['required', 'max:50', 'min:1'],
            'first_name' => ['required', 'max:50', 'min:1'],
            'last_name' => ['required', 'max:50', 'min:1'],
            'institution' => ['required', 'max:50', 'min:1'],
            'email' => ['required', 'email', 'unique:users,email'],
            'nib' => ['required', 'numeric', 'digits:7', 'unique:users,nib'],
        ]);

        $validatedData['password'] = Hash::make('password');

        User::create($validatedData);

        $nib = $validatedData['nib'];

        return redirect('/checkout/' . $nib)->with('nib', $nib);
    }
}
