<?php

namespace App\Http\Controllers;

use App\Mail\WelcomeMail;
use App\User;
use Illuminate\Support\Facades\Mail;

class RegistrationController extends Controller
{
    public function create(){
        return view('registration.create');
    }

    public function store(){
        $this->validate(request(),[
            'name' => 'required',
            'email' => 'required|unique:users|email',
            'password' => 'required|confirmed'
        ]);

        $user = User::create([
            'name' => request('name'),
            'email' => request('email'),
            'password' => bcrypt(request('password'))
        ]);

        auth()->login($user);

        Mail::to($user)->send(new WelcomeMail($user));

        return redirect()->home();
    }
}
