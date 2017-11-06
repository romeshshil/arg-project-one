<?php

namespace App\Http\Controllers\Frontend;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

use App\User;
use App\UserInfo;

class RegisterController extends Controller
{
     public function index(){
     	return view('auth.register');
     }


     public function store(Request $request){
     	$user= new User;
     	$user->name=$request->input('name');
     	$user->email=$request->input('email');
     	$user->password=bcrypt($request->input('password'));
     	$insert=$user->save();
     	if($insert){
     		$userInfo=new UserInfo;
     		$userInfo->user_id=$user->id;
     		$userInfo->user_name=$request->input('username');
     		$userInfo->phone=$request->input('mobile');
     		$userInfo->referal_link=$request->input('link');
     		$userInfo->country=$request->input('country');
     		$userInfo->save();
     		// get a successfully mess here 
     		return redirect()->back();
     	}


     }
}
