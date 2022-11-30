<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class delStory extends Controller
{
    //
    function show(REQUEST $rq){

        $id = strip_tags(htmlspecialchars(trim($rq->id)));
        if($this->idexist($id)){
            if(DB::table('all_stories')->where('story_identy',$id)->delete()){
                echo 'Deleted';
            }else{
                
                echo 'Not Deleted may Somthing wrong !';
            }
        }else{
           
            echo 'Story does`t exists';
        }
    }
    function idexist($id){
        return DB::table('all_stories')->where('story_identy',$id)->exists();
    }
}
