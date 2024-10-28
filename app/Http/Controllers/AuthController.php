<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AuthController extends Controller
{
  public function showRegister()
  {
      return view('auth.register');
  }

  public function showLogin()
  {
      return view('auth.login');
  }

  public function register(Request $request)
  {
      $validated = $request->validate([
        'name' => 'required|string|max:255',
        'email' => 'required|email|unique:users',
        'password' => 'required|string|min:8|confirmed',
      ]);

      $user = User::create($validated);

      Auth::login($user);

      return redirect()->route('ninjas.index');
  }

  public function login()
  {
      // login a user here
  }
}
