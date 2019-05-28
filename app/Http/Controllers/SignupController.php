<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SignupController extends Controller
{
    public function signup(){
      return view('submits/signup');
    }
    public function store(){
      request()->validate([
        'name' => 'required',
        'email' => ['required','email'],
        'contact' => ['required','min:10','max:10','numeric'],
        'password' => ['required','confirmed']
      ]);

      return request()->all();
    }
}
