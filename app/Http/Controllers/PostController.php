<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;
use DB;
use Hash;
use App\PostModel;
use Session;

class PostController extends Controller
{
    
    public function index(Request $request){

       
            return view('city-detail',['city'=>$request->city]);
        

    }


    public function LoadProducts(Request $request){
        if($request->ajax())
        {
            dd($request->city);
        }

    }
}
