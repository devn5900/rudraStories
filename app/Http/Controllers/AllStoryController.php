<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
class AllStoryController extends Controller
{
    function show(){

        $allst=DB::table('all_stories')
        ->select('all_stories.story_id','all_stories.story_heading','all_stories.story_desc',
           'all_stories.story_identy','all_stories.images')
            ->get();
        // dd($allst);
        return  view('homeAndStories.all_stories')->with(['allst'=>$allst]);
    }
}
