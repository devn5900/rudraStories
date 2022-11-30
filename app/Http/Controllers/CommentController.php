<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\CommentModel;
use Illuminate\Support\Facades\DB;

class CommentController extends Controller
{
    function show(Request $rq,$name){
        // dd($rq);
       $uname= base64_decode(strip_tags($name));
       $cmnt=$rq->usercomment;
       $hash=$rq->cmntcnt;
       if (DB::table('all_stories')
       ->where('story_identy',$hash)
       ->exists()) {
     
       $cmntmdl= new CommentModel;
       $cmntmdl->comment_by=$uname;
       $cmntmdl->comment=$cmnt;
       $cmntmdl->stry_iden=$hash;
       if($cmntmdl->save()){
         return redirect()->back(); 
       }else{
        echo ' not cmnt';
       }
    }
    else{
        echo 'doesnt exis';
    }

    }
}
