<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Validator;
use Auth;
use DB;
use Hash;
use App\User;
use Session;

class AuthController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $this->validate($request,[
            'email'     =>  'required|email',
            'password'  =>  'required|alphaNum|min:4'
        ]);

        $user_data = array(
            'email'     =>  $request->get('email'),
            'password'  =>  $request->get('password')
        );

        if(Auth::attempt($user_data))
        {
           $role = Auth::user()->role;
            if($role == 'user'){
                return redirect('dashboard/'.Auth::user()->name);
            }elseif($role == 'shopkeeper'){
                echo "shopekeeper";
            }else{
                return redirect('admin-dash');
            }
      
        }
        else
        {
            
         return back()->with('error', 'Wrong Login Details');
        }
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }

    public function logout(){
        Auth::logout();
     return redirect('/');
    }


    public function CheckEmail(Request $request){
        if($email = $request->get('email')){
            $data = DB::table('users')
                        ->where('email',$email)
                        ->count();

            if($data > 0){
                return 1;
            }else{
                echo 0;
            }
        }
    }

    //User SignUp
    public function SignUp(Request $request){

        $data = $request->only(['name','email','contact','confirm_password','_token']);
       
        $user = new User([
            'name'  =>  $data['name'],
            'email' =>  $data['email'],
            'contact'   =>  $data['contact'],
            'password'  =>  Hash::make($data['confirm_password']),
            'remember_token'    =>  $data['_token'],
        ]);
        

       if($user->save()){
        $user = DB::table('users')->where('id',$user->id)->first();
         //session::put('User', $user);
         return back()->with('success', 'Account Created Successfully');
        
       }
         //$this->user =  Auth::user();
      
        
    //   echo  $lastId = DB::table('users')->insertGetId(['email' => $data['email']]);
        
        
    }
}
