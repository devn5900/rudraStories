<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Psy\Command\WhereamiCommand;

class updateEditedStory extends Controller
{
    //
    function show($stid)
    {
    
        if ($this->ifexists($stid)) {
            
            $edstry10= DB::table('all_stories')
            ->where('story_identy',strip_tags($stid))
          ->join('story_type','story_type.sno','=','all_stories.story_type')
        ->get();
    //    dd($edstry10);  
        return view('admin.editstorycon')->with(['storyed'=>$edstry10,'sty'=>$this->edstory()]);
            // echo 'exists';
        } else {

            echo ' not exists';
        }
    }

    function edstory(){
        $tpyest=  DB::table('story_type')->select('sno','Story_type')->get();
    return $tpyest;                   
    }

    function ifexists($sid)
    {
        return DB::table('all_stories')->where('story_identy', $sid)->exists();
    }
}
