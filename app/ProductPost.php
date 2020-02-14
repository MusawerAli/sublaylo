<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ProductPost extends Model
{
    protected $table = "product_posts";
    protected $fillable = ['image','ItemName','company_name','price','type','qty','unit','shipping','heading','discount'];
}
