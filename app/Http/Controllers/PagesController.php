<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{
    public function home(){
      return view('home');
    }
    public function blogs(){
      return view('blogs');
    }
    public function dashboard(){
      return view('dashboard');
    }
    public function login(){
      return view('login');
    }
    public function exchange(){
      return view('exchange');
    }
    public function exchanger(){
      return view('exchanger');
    }
    public function reviews(){
      return view('reviews');
    }
    public function search(){
      return view('search');
    }
    public function settings(){
      return view('settings');
    }
}
