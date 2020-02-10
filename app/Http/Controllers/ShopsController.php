<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Validator;
use App\User;
use Hash;
 use App\BusinessDetail;
 use Auth;
 use DB;
 use DataTables;
class ShopsController extends Controller
{

    
    protected $user,$BusinessDetail;
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

    public function shops_detail(){
        
        $students = DB::table('users')
                    ->join('BusinessDetails','users.id','=','BusinessDetails.user_id')
                    ->select('users.id','email','name','contact','status','city','BusinessName','BusinessContact','BusinessType','BusinessAddress','BusinessDetails.created_at')
                    ->get();
       // $students = User::where('role', 'user')->get();
          return DataTables::of($students)
               ->addColumn('action', function($student){
                   return '
                   
                   <div class="dropdown">
                   <button type="button" class="btn btn-primary dropdown-toggle" data-toggle="dropdown">
                     Action
                   </button>
                   <div class="dropdown-menu">
                     <a class="dropdown-item status" secure="'.$student->name.'" href="#" value="blocked" id="'.$student->id.'">Block</a>
                     <a class="dropdown-item status" secure="'.$student->name.'" value="active" id="'.$student->id.'">Activate</a>
                   </div>
                 </div>';
               })
               ->make(true);
       // dd($user->toArray());
        
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
                    'role'              =>  'shopkeeper'
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

 
    public function ChangeStatus(Request $request){
        $data = $request->only(['id','value']);
       $user =  User::find($data['id']);
       $user->status = $data['value'];
       
       if($user->save()){
           echo $request->name." ".$data['value']." Successfully.";
       }

       

    }
    public function shopper(){
        echo 'dssds';
    }
}
