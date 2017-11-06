<?php

namespace App\Http\Controllers\Backend;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

use App\User;
class HomeController extends Controller
{
   
   public function dashboard(){

   		 $todayUser=User::whereDate('created_at', '=', date('Y-m-d'))->count();
   		 $todayApproveUser=User::where('usertype',2)->whereDate('created_at', '=', date('Y-m-d'))->count();
   		return view('backend.dashboard',compact('todayUser','todayApproveUser'));
   }
}
