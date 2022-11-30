<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
class editStory extends Controller
{
    //
    function show(){
            return view('admin.editstory')->with(['edstr'=>$this->edstory()]);
    }
    function edstory(){
        return DB::table('all_stories')->select('story_heading',
        'story_identy')->paginate(5);        
    }
}
