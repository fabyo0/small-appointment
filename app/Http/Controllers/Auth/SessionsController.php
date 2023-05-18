<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Hash;
use Illuminate\Validation\ValidationException;


class SessionsController extends Controller
{
    public function create()
    {
        return view('auth.login');
    }


   public function store(Request $request)
    {
        // validate login form
        $formAttribute = request()->validate([
            'email' => 'required|email',
            'password' => 'required',
        ]);

        if (!auth()->attempt($formAttribute)){
            throw  ValidationException::withMessages([
                'email' => 'Sağladığınız kimlik bilgileri doğrulanamadı.'
            ]);
        }
        session()->regenerate();

        return Redirect::route('dashboard.index')->with('success','Tekrardan Hoşgeldiniz');
    }

    public function destroy()
    {
        Auth::logout();
        session()->regenerate();
        return Redirect::route('login.create');
    }

}
