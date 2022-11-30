<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class StoryPartController extends Controller
{
    function show($id,$hash,$stryId=null){
        $read = DB::table('story_parts')
        ->where('story_identy','=',$hash)
        ->join('story_type','story_type.sno','=','story_parts.story_type')
        ->get();
        // dd($read);
       $sum= $this->cmntsum($hash);
       $name= $this->getAllcmnt($hash);
        $relstory=$this->partStory($stryId);
        $relatedStory=$this->relatedStory();
        $this->increaseview($hash);
         $loguspc=$this->getlogusprf();
    //     $getpart= $this->getpart($id,$stryId);

    //
        return view('homeAndStories.storiespart')->with(['mainst'=>$read,
        'cmnt'=>$name,'cmntsum'=>$sum,'relstry'=>$relatedStory,
        'part'=>$relstory,'logup'=>$loguspc]);
    }
 
    function getlogusprf(){

        if(session()->has('usnm','loginstat','usiden')){
            
           return DB::table('usersignupinfo')
            ->where('uidenkk',session('usiden'))->value('images');
        }else{

            return null;
        }
    }


    function increaseview($hash){
        $view=$this->returnview($hash);
        $view=$view+1;
       $up= DB::table('story_parts')->where('story_identy',$hash)->update(['view'=>$view]);
        if ($up) {
            
        }
        else{

        }
    }

    function returnview($hash){
      $view= DB::table('story_parts')->select('view')->where('story_identy',$hash)->value('view');
        return $view;
    }
 
    function relatedStory(){

        $latest = DB::table('all_stories')
        ->select('all_stories.story_id','all_stories.story_heading','all_stories.story_desc',
        'all_stories.story_identy','all_stories.images')
        ->inRandomOrder()
        ->get();
       return $latest;
    }

    function partStory($stryId){

        $relst=DB::table('story_parts')
        ->select('part_no','story_identy','mainstry_id','story_heading','story_desc')
       ->where('mainstry_id','=',$stryId)
        ->get();
        // dd($relst);
        return $relst;
    }

    function getAllcmnt($hash){

        $cmnt=DB::table('stry_part_comments')
        ->where('part_stry_identy','=',$hash)
        ->join('usersignupinfo','stry_part_comments.comment_by','=','usersignupinfo.UserName')
        ->select('usersignupinfo.images','stry_part_comments.comment_by','stry_part_comments.comment')
        ->get();
        // dd($cmnt);
      return $cmnt;
     }
     function cmntsum($hash){

        $cmnt=DB::table('stry_part_comments')
        ->where('part_stry_identy','=',$hash)
        ->get()->count();
        // dd($cmnt);
      return $cmnt;
     }
}
