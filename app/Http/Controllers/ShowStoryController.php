<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\IndexController;
class ShowStoryController extends Controller
{
    function show($id,$hash){
        $read = DB::table('all_stories')
        ->where('story_identy','=',$hash)
        ->join('story_type','story_type.sno','=','all_stories.story_type')
        ->get();
        // dd($read);
        $this->increaseview($hash);
        
        if ($read->isNotEmpty()) {
            # code...
            $sum= $this->cmntsum($hash);
            $name= $this->getwritername($hash);
            $relstory=$this->relatedStory();
            $getpart= $this->getpart($id);
            $loguspc=$this->getlogusprf();
            return view('homeAndStories.stories')->with(['showstr'=>$read,
            'cmntsum'=>$sum,'allcmnt'=>$name,'relstry'=>$relstory,
            'part'=>$getpart,'logup'=>$loguspc]);
        }
        else{
            return redirect('/error');
        }
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
       $up= DB::table('all_stories')->where('story_identy',$hash)->update(['view'=>$view]);
        if ($up) {
            
        }
        else{

        }
    }

    function returnview($hash){
      $view= DB::table('all_stories')->select('view')->where('story_identy',$hash)->value('view');
        return $view;
    }

    function relatedStory(){

        $latest = DB::table('all_stories')
        ->select('all_stories.story_id','all_stories.story_heading','all_stories.story_desc',
        'all_stories.story_identy','all_stories.images')
        ->get();
       return $latest;
    }

    function getpart($id){

        $part= DB::table('story_parts')
        ->select('part_no','mainstry_id','story_heading','story_desc','story_identy')
        ->where('mainstry_id','=',$id)->get();
        // dd($part);
        return $part;
    }

   
    function cmntsum($hash){
        $sum = DB::table('comment_section')
        ->select('comment_section.*')->where('stry_iden','=',$hash)
        ->get()->count();
        return $sum;
    }
    function getwritername($hash){
        $name= DB::table('comment_section')->where('stry_iden','=',$hash)
        ->join('usersignupinfo','comment_section.comment_by','=','usersignupinfo.UserName')
        ->select('usersignupinfo.images','comment_section.comment_by','comment_section.comment')
        ->get();
        return $name;
    }
}
