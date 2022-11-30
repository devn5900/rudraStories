<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;

class IndexController extends Controller
{
    function idexDisplay(){

            $latest = DB::table('all_stories')
            ->select('all_stories.story_id','all_stories.story_heading','all_stories.story_desc',
            'all_stories.stry_likes','all_stories.images','all_stories.story_identy','all_stories.view')
            ->latest('post_time','asc')
            ->limit(5)
            ->get();
           $top= $this->topstry();
           $cat=$this->category();
           $thought=$this->getThgt();
             return view('index')->with(['latest'=>$latest,'top'=>$top,
             'cat'=>$cat,'thght'=>$thought]);
        }
        function topstry(){
            $latest = DB::table('all_stories')
            ->select('all_stories.story_id','all_stories.story_heading','all_stories.story_desc',
            'all_stories.stry_likes','all_stories.images','all_stories.story_identy','all_stories.view')
            ->latest('view','asc')
            ->limit(5)
            ->get();
            // dd($latest);
            return $latest;
        }
        function category(){
            $latest = DB::table('story_type')
            ->select()
            ->latest('view','asc')
            ->get();
            // dd($latest);
            return $latest;
        }
        function getThgt(){

            $tht= DB::table('thoughts')->select('Mainthought')->orderBy('created_at','desc')->first();
            // dd($tht);
            return $tht;
        }
}
