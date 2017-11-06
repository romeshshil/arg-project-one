<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;

use App\UserInfo;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */

    public function userDashboard()
    {
        return view('frontend.index');
    }

    public function verifyUserPage(){
        return view('frontend.user-verify');
    }

    public function verifyUserInfoStore(Request $requests){

        // get user id for request 
         $userId=$requests->input('user_id');

        $userinfoProfile=UserInfo::where('user_id',$userId)->first();


        $userPhoto=$requests->file('photo');
        $userPhotoOne=$requests->file('photo_one');
        $userPhotoTwo=$requests->file('photo_two');
        $upload='upload/users';

        $userPhotoFileName=$userPhoto->getClientOriginalName();
        $userPhotoOneFileName=$userPhotoOne->getClientOriginalName();
        $userPhotoTwoFileName=$userPhotoTwo->getClientOriginalName();

        $userPhotoSuccess=$userPhoto->move($upload,$userPhotoFileName);
        $userPhotoOneSuccess=$userPhotoOne->move($upload,$userPhotoOneFileName);
        $userPhotoTwoSuccess=$userPhotoTwo->move($upload,$userPhotoTwoFileName);

        $userinfoProfile->nationid_no=$requests->input('nid_no');
        $userinfoProfile->photo=$userPhotoFileName;
        $userinfoProfile->photo_one= $userPhotoOneFileName;
        $userinfoProfile->photo_two= $userPhotoTwoFileName;
        $userinfoProfile->save();
    }

}
