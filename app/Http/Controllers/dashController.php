<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class dashController extends Controller
{
    //
    function show(){

       
        return view('admin.navFooter.navbar')->with(['dv'=>$this->strycnt(),
        'uc'=>$this->usercnt(),'ms'=>$this->msgcnt()]);
    }
    function dash(){
        return view('admin.dashboard')->with(['dv'=>$this->strycnt(), 
        'uc'=>$this->usercnt(),'ms'=>$this->msgcnt()]);

    }
    function newstryalt(){

        return  DB::table('all_stories')->where('post_time',date('Y-m-d'))->get()->count();
        
    }
    function strycnt(){

        return  DB::table('all_stories')->get()->count();
    }
    function usercnt(){
        
        return  DB::table('usersignupinfo')->get()->count();
    }
    function msgcnt(){
        
        return  DB::table('helpquery')->get()->count();
    }
}
