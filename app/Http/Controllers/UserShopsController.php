<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Validator;
use Hash;
use Auth;
use DB;
use Image;
use App\ProductPost;
use DataTables;
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
                             return response()->json([
                    'success'   => 'Product added Successfuly',
                    // 'uploaded_image' => '<img src="/images/'.$new_name.'" class="img-thumbnail" width="300" />',
                    'class_name_s'  => 'alert-success w3-text-green'
                    ]);
                        }

                       }
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


        public function PrdDetail(Request $request)
        {
            // $product_posts = DB::table('product_posts')
                    
            //        // ->select('product_posts.id','product_posts.user_id','item_name','company','price','discount','unit','type','total','delivery','heading','image','qty','')
            //        ->select('*') 
            //        ->get();
                   
       if($request->ajax()){
        $product_posts = ProductPost::where('user_id', Auth::user()->id)->get();
        
        return DataTables::of($product_posts)
        ->addColumn('delivery', function($product_posts){
          $button = '<select value="shipping">
          <option value="on">Free Shipping</option>
          <option value="charges">Charges</option>
        </select> <br>';
          $button .= '&nbsp;&nbsp;';
          return $button;
      })
      ->addColumn('total',function($product_posts){
        return '
        <span data-edit name="price" class="price" id="price" prd_id='.$product_posts->id.'>'.$product_posts->total.'</span>
        ';

      })
      ->addColumn('action',function($product_posts){
        return '
        <button  class="w3-btn w3-red" name="delete" id="delete" prd_id='.$product_posts->id.'>Delete</button>
        ';

      })
      ->addColumn('discount',function($product_posts){
        return '
        <span data-edit name="discount" class="discount" id="discount" prd_id='.$product_posts->id.'>'.$product_posts->discount.'</span>
        ';

      })
             ->rawColumns(['delivery','total','action','discount'])
                    ->make(true);
       }
        }


                                //Update tabledata of shopskeepers
        public function UpdateFields(Request $request){
          $id = Auth::user()->id;
          if($request->ajax()){
            if($request->action=='TblData'){
            
              $data = $request->only(['_token','value','prd_id','field_name',]);
             
              $ProductPost = ProductPost::find($data['prd_id']);
              $discount = $ProductPost->discount;
              $price = $ProductPost->price;
              $total = $ProductPost->total;
              
             if($data['field_name']=='discount'){
              $total_price =  $price - ($price * ( $data['value']/ 100));
              $ProductPost->total = $total_price;
              $ProductPost->discount = $data['value'];
              $ProductPost->save();
             }

             if($data['field_name']=='price'){
              $total_price =  $data['value'] - ($data['value'] * ($discount/ 100));
              $ProductPost->price = $data['value'];
              $ProductPost->total = $total_price;
              $ProductPost->save();
             }


            }
          }
        }
}
