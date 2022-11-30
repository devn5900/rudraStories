<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class CategoryController extends Controller
{
    //
    function show()
    {

        $cate = DB::table('story_type')
        ->get();

        $catid = DB::table('story_type')->select('sno')->get();
        // $tt= $this->countstry($catid);
        // dd( $tt);
        return  view('homeAndStories.category')->with(['cate'=>$cate]);
    }

    function countstry($sid){
        
        foreach ($sid as $key) {
           
            echo $key->sno;
            $total[] = DB::table('story_type')->select('sno')
            ->get();
            
        }
        return $total;
       
    }
}
 