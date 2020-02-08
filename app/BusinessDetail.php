<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class BusinessDetail extends Model
{
    protected $table = "BusinessDetails";
    protected $fillable = ['BusinessName', 'BusinessContact', 'BusinessType','BusinessAddress','remember_token','user_id','admin_id'];
}
