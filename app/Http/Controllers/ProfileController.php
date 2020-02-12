<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;
use DB;
use Image;
use App\User;
use Validator;
use Hash;
class ProfileController extends Controller
{
    
    public function __construct(){
       // $this->middleware('auth');
      
    }

    public function index(){

        $user = DB::table('users')->find(Auth::user()->id);

        return view('profile',['user'=>$user]);

    }


    public function UpdateProfile(Request $request){

        $data = $request->only(['name','email','contact','address','_token','old_password','new_password','image']);
     $user_id = Auth::user()->id;
     $image_name = Auth::user()->image;
     if($request->req_type =="profile"){
        $this->validate($request, [
            'image'  => 'image|mimes:jpeg,png,jpg|max:2048',
            'name'  =>  'required',
            'email' =>  'required',
            'contact'   =>  'required',
            'address'   =>  'required',
           
           ]);
      
            $image = $request->file('image');
    
            if($image){
                $image_name = $user_id.'_'.time() . '.' . $image->getClientOriginalExtension();
       
           $destinationPath = public_path('/assets/img/user_images/');
       
             $resize_image = Image::make($image->getRealPath());
       
             $resize_image->resize(300, 300, function($constraint){
              $constraint->aspectRatio();
             })->save($destinationPath . '/' . $image_name);
       
            // $destinationPath = public_path('/images');
       
             $img_move = $image->move($destinationPath, $image_name);
            }
             if($image=="" || $img_move){
                $user = User::find($user_id);
                $user->name = $data['name'];
                $user->email = $data['email'];
                $user->contact = $data['contact'];
                $user->address = $data['address'];
                $user->image    = $image_name;
                $user->save();
                return back()->with('success', 'Profile Updated Successfully');
             }
     }
     if($request->req_type=="pwd"){
        $this->validate($request, [
            
            'old_password'   =>  'required',
            'new_password'   =>  'required|same:old_password',
           
           ]);
           
           $user = User::find($user_id);
           $user->password = Hash::make($data['new_password']);
           $user->save();
           return back()->with('pwd_success', 'Password Changes Successfully');
     }
    }
}
