<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\LikeModel;
class LikeController extends Controller
{
    //

    function show(Request $request){
            $stid= base64_decode(strip_tags($request->st_i124));
            
            $getlike=$this->getlike($stid);
            $uplike=$this->updateLike($getlike,$stid);
            return $this->getlike($stid);
            
    }

    function updateLike($like,$iden){
        $like=$like+1;
        // echo $iden;
        $newlike= new LikeModel;
      return $newlike::where('story_id',$iden)->update(['stry_likes'=>$like]);
        
    }
    function getlike($like){
            $newlike= new LikeModel;
             
       return $newlike::select('stry_likes')->where('story_id',$like)->value('stry_likes');
    }
}
