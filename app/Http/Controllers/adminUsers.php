<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class adminUsers extends Controller
{
    //
    function show (){
        
       $us= DB::table('usersignupinfo')->select('S_No','UserName',
        'Email','UserMobile','status','uidenkk')->paginate(10);
            return view('admin.users')->with(['usrd'=>$us]);
        
    }
}
 