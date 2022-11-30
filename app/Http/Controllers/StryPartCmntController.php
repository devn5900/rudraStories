<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\StryPartCmntModel;
use Illuminate\Support\Facades\DB;

class StryPartCmntController extends Controller
{
    // 
    function show(Request $rq,$idk){
         
        $usname= base64_decode(strip_tags( $rq->cmntcnt));
        $cmnt= strip_tags($rq->usercomment);
        if (DB::table('story_parts')
        ->where('story_identy',strip_tags($idk))
        ->exists()) {
            
            $partcmnt= new StryPartCmntModel;
            $partcmnt->comment_by=$usname;
            $partcmnt->comment= $cmnt;
            $partcmnt->part_stry_identy=$idk;
            if($partcmnt->save()){
                return redirect()->back()->with(['erp'=>'Successful !']);
            }else{
                return redirect()->back()->with(['erp'=>'Opps ! Something went wrong']);
            }
        }
        else{
            return redirect()->back()->with(['erp'=>'Opps ! Something went wrong']);

        }
    }
}
