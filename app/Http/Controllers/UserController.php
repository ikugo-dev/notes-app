<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Validation\Rule;

class UserController extends Controller
{
    public function register(Request $request)
    {
        $incomingFields = $request->validate([
            'name' => ['required', 'min:4', 'max:20', Rule::unique('users', 'name')],
            'email' => ['required', 'min:10', 'max:50', Rule::unique('users', 'email')],
            'password' => ['required', 'min:8', 'max:50'],
        ]);
        $user = new User($incomingFields);
        $user->password = bcrypt($incomingFields['password']);
        $user->save();

        Auth::login($user);
        return redirect('/');
    }

    public function login(Request $request)
    {
        $incomingFields = $request->validate([
            'loginname' => ['required'],
            'loginpassword' => ['required'],
        ]);

        $successfulLogin = Auth::attempt([
            'name' => $incomingFields['loginname'],
            'password' => $incomingFields['loginpassword']
        ]);

        if ($successfulLogin) {
            $request->session()->regenerate();
        }
        return redirect('/');
    }

    public function logout()
    {
        Auth::logout();
        return redirect('/');
    }
}
