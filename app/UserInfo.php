<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class UserInfo extends Model
{
    
    protected $table = 'user_info';

     protected $fillable = [
     	'user_id',
     	'user_name',
     	'phone',
     	'referal_link',
     	'phone',
     	'country',
     	'photo',
     	'nationid_no',
     	'photo_one',
     	'photo_two',
     ];

}
