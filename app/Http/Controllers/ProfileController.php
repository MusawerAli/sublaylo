<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;
use DB;
class ProfileController extends Controller
{
    
    public function __construct(){
       // $this->middleware('auth');
      
    }

    public function index(){

        $user = DB::table('users')->find(Auth::user()->id);

        return view('profile',['user'=>$user]);

    }
}
