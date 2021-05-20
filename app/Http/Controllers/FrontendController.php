<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FrontendController extends Controller
{
    public function welcome(){
        return view('frontend.welcome');
     }
     public function about(){
         return view('frontend.about');
     }
     public function service(){
         return view('frontend.service');
     }
    
     public function log(){
         return view('auth.login');
     }
     public function reg(){
         return view('auth.register');
     }
}
