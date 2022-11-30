<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\ThoughtsModel ;
use Illuminate\Support\Facades\Crypt;
use Illuminate\Support\Facades\DB;
class ThoughtsController extends Controller
{
    //
    function show(Request $rq){

       $thgt= trim(strip_tags($rq->nm45226));
        $obj= new ThoughtsModel;
        $obj->Mainthought = $thgt;
        $hash= substr(Crypt::encryptString($thgt),10,74);
        $obj->thought_iden=strtoupper($hash);
        if($obj->save()){
            return true;
        }else{
            
            return false;
        }
    }
    
}
