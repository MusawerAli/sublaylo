<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserShopsController extends Controller
{
    
    public function index(){
        return view('shopkeeper/shop-dash');
    }

    public function AddPrd(){
        return view('shopkeeper/AddPrd');
    }
}
