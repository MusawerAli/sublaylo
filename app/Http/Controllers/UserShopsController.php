<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Validator;
use Hash;
use Auth;
use DB;
use Image;
use App\ProductPost;
class UserShopsController extends Controller
{
    
    public function index(){
        return view('shopkeeper/shop-dash');
    }

    public function AddPrd(){
        return view('shopkeeper/AddPrd');
    }


    // insert products into db

        public function InsertPrd(Request $request){
            
            $data = $request->only(['image','ItemName','company_name','price','type','qty','unit','shipping']);
           if(!isset($data['shipping'])){$data['shipping']='charges';}
            
            $user_id = Auth::user()->id;
        
            $validation = Validator::make($request->all(), [
                'image' => 'required|image|mimes:jpeg,png,jpg,gif|max:2048',
                'ItemName'      =>  'required',
                'company_name'  =>  'required',
                'price'         =>  'required',
                'type'          =>  'required',
                'qty'           =>  'required',
                'unit'          =>  'required',
                

               ]);
               
               //If validations passses
               
                if($validation->passes())
                {
                    //upload images
                    $image = $request->file('image');
                    $image_name = $user_id.'_'.$data['ItemName'].'_'.time() . '.' . $image->getClientOriginalExtension();
                    $destinationPath = public_path('/assets/img/product-img/');
                    //resize image
                    $resize_image = Image::make($image->getRealPath());

                 $move =    $resize_image->resize(400, 400, function($constraint){
                        $constraint->aspectRatio();
                       })->save($destinationPath . '/' . $image_name);

                       if($move){
                         $ProductPost = new ProductPost;
                        $ProductPost->user_id  = $user_id;
                        $ProductPost->item_name  = $data['ItemName'];
                        $ProductPost->company  = $data['company_name'];
                        $ProductPost->price  = $data['price'];
                        $ProductPost->unit  = $data['unit'];
                        $ProductPost->type  = $data['type'];
                        $ProductPost->qty  = $data['qty'];
                        $ProductPost->total  = $data['price']*$data['qty'];
                        $ProductPost->delivery  = $data['shipping'];
                        $ProductPost->image  = $image_name;
                        
                        if($ProductPost->save()){
                            echo "F**K";
                        }

                       }

                    // $image = $request->file('select_file');
                    // $new_name = rand() . '.' . $image->getClientOriginalExtension();
                    // $image->move(public_path('images'), $new_name);

                    // return response()->json([
                    // 'message'   => 'Image Upload Successfully',
                    // 'uploaded_image' => '<img src="/images/'.$new_name.'" class="img-thumbnail" width="300" />',
                    // 'class_name'  => 'alert-success'
                    // ]);
               
                }
                else
                    {
                        
                    return response()->json([
                    'message'   => $validation->errors()->all(),
                    'image' => '',
                    'class_name'  => 'alert-danger'
                    ]);
                    }
          
        }
}
