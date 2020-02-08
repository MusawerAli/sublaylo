<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Validator;
use App\User;
use Hash;
 use App\BusinessDetail;
 use Auth;
 use DB;
class ShopsController extends Controller
{
    protected $user,$BusinessDetail;
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        
    }

    public function shops_detail(){

        // User::with('info')->get();
        // return view('admin.pages.add-shops');
        
    }

    public function add_business(Request $request){
        
        $error_array = array();
        $success_output = '';
        $data = $request->only(['name','email','address','contact','city','country','state','password','_token','BusinessName','BusinessContact','BusinessAddress','BusinessType']);
        
        $user = $this->user = new User();
        $BusinessDetail = $this->BusinessDetail = new BusinessDetail();


                                     //get the Login User ID
        $admin_id = Auth::user()->id;

                                //Form Validation
                                
        $validation  = Validator::make($request->all(),[
            'name'      =>  'required',
            'email'     =>  'required',
            'password'  =>  'required',
            'contact'   =>  'required',
            'city'     =>   'required',
            'state'     =>  'required',
            'country'   =>  'required',
            'BusinessName'=>  'required',
            'BusinessContact'=>   'required',
            'BusinessAddress'=>   'required',
            'BusinessType'    =>  'required'
        ]);
 

        if($validation->fails()){
            foreach($validation->messages()->getMessages() as $field_name => $messages)
            {
                $error_array[] = $messages;
            }
        }
           

           
            DB::beginTransaction();

            try{
    
                $user = $this->user->create([
                    'name'  =>  $data['name'],
                    'email' =>  $data['email'],
                    'contact'   =>  $data['contact'],
                    'address'   =>  $data['address'],
                    'city'   =>  $data['city'],
                    'state'   =>  $data['state'],
                    'country'   =>  $data['country'],
                    'password'  =>  Hash::make($data['password']),
                    'remember_token'    =>  $data['_token'],
                ]);
                
                    $BusinessDetail = $this->BusinessDetail->create([
                        'BusinessName'   =>  $data['BusinessName'],
                        'BusinessContact'   =>  $data['BusinessContact'],
                        'BusinessAddress'   =>  $data['BusinessAddress'],
                        'BusinessType'   =>  $data['BusinessType'],
                        'admin_id'      =>  $admin_id,
                        'user_id'       =>  $user->id,
                    ]);
                    //$BusinessDetail->save();
                    if($user && $BusinessDetail){
                        DB::commit();
                    }
                    $success_output = '<div class="alert alert-success">ShopKeeper Added Successfully</div>';
                
            }
            catch(Exception $ex){

                DB::rollback();
            }
        
          
        
        
            $output = array(
                'error'     =>  $error_array,
                'success'   =>  $success_output
            );
            echo json_encode($output);
       


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
}
