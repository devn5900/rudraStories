<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Dotenv\Validator;
use App\Models\HelpModel;

class HelpController extends Controller
{
    //
    function show(Request $rq){
        // echo 'send';
        $valid= $rq->validate([
            'nm45226'=>['required ','string'],
            'em45226'=>['required','email'],
            'msg45226'=>['required'],
        ]);

        // dd($valid);        

        $help= new HelpModel;

        $name= strip_tags($rq->nm45226);
        $email= strip_tags($rq->em45226);
        $msg= strip_tags($rq->msg45226);

        $help->name=$name;
        $help->email=$email;
        $help->msg=$msg;
        if ($help->save()) {
            return 'Successfully Send !';
        }else{
             
            echo 'Something went wrong';
        }
    }
}
 