<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\User;
class BusinessDetail extends Model
{
    protected $table = "BusinessDetails";
    protected $fillable = ['BusinessName', 'BusinessContact','BusinessType','BusinessAddress','remember_token','user_id','admin_id'];
    

    public function user(){
        return $this->belongsTo('App\User');
    }

}
