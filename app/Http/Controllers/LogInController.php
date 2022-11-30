<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use Illuminate\Support\MessageBag;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Hashing\BcryptHasher;




class LogInController extends Controller
{
    function show( Request $request){
        $valida= $request->validate([
                'Logid'=>['required'],
                'Logps'=>['required','min:4']
        ]);
       $lgin=  strip_tags($request->Logid);
       $lgps=  strip_tags($request->Logps);
        if ($this->chkexists($lgin)) {
         
            if ($this->passmatch($lgin,$lgps)) {
                 $useriden=$this->gethash($lgin);
                session(['usnm'=>$lgin,'loginstat'=>true,'usiden'=>$useriden]);
                session()->forget('url');
                return redirect('/');
            }else{
                
                return redirect('/Log_In')->with('notmatch','Incorrect Password !');

            }
        }else{
            return redirect('/Log_In')->with('notmatch','Incorrrect User Name !');
        }
      
    }

    function passmatch($lgin,$lgps){
            $pass=DB::table('usersignupinfo')
            ->select('Password')
            ->where('UserName',$lgin)->get();
            foreach($pass as $p){
                
                $pas= $p->Password;
            }
            if (Hash::check($lgps,$pas)) {
                return true;
            }else{
                return false;                
            }
    }

function gethash($lgin){

   $hash= DB::table('usersignupinfo')->select('uidenkk')->where('UserName',$lgin)->get();
   foreach ($hash as $value) {
       foreach ($value as $key) {
           $hs= $key;
       }
   }
   return $hs;
}
    function chkexists($lgin){

        if (DB::table('usersignupinfo')->where('UserName',$lgin)->exists()) {
            return true;
        }

    }
}
