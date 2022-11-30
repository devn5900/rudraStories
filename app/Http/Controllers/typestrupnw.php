<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class typestrupnw extends Controller
{
    //
    function show(){

        $tpyest=  DB::table('story_type')->select('sno','Story_type','type_iden')->get();
       return view('admin.writestory')->with(['tp'=>$tpyest]);
          
      }
}
