<?php

namespace App\Http\Controllers;
use App\herb;
use App\disease;
use Alert;

use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function dashboard(){
        return view('backend.dashboard'); 
    }
   
    public function Rdisease(){
        $diseases = disease::where('type','respiratory')->get();
        return view('backend.users.Rdisease', compact('diseases'));
    }
    public function TRdisease(){
        $diseases = disease::where('type','respiratory')->get();
        return view('backend.users.TRdisease', compact('diseases'));
    }
    public function Cdisease(){
        $diseases = disease::where('type','cancer')->get();
        return view('backend.users.cancer', compact('diseases'));
    }
    public function TCdisease (){
        $diseases = disease::where('type','cancer')->get();
        return view('backend.users.Tcancer', compact('diseases'));
    }
    public function Gdisease(){
        $diseases = disease::where('type','general')->get();
        return view('backend.users.Gdisease', compact('diseases'));
    }
    public function TGdisease (){
        $diseases = disease::where('type','general')->get();
        return view('backend.users.TGdisease', compact('diseases'));
    }
    public function Rherbs(){
        $herbs = herb::where('type','raw')->get();
        return view('backend.users.Rherbs',compact('herbs'));
    }
    public function products(){
        $herbs = herb::where('type','product')->get();
        return view('backend.users.Products',compact('herbs'));
    }
    
    public function Gherbs(){
        $herbs = herb::where('type','general')->get();
        return view('backend.users.Gherbs',compact('herbs'));
    }


}
