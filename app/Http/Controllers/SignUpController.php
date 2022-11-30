<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\View\Middleware\ShareErrorsFromSession;
use function PHPUnit\Framework\isEmpty;
use App\Models\Signup;
use Illuminate\Support\Facades\Hash;
use Psy\Util\Str;

class SignUpController extends Controller
{
    function show(Request $request){
      
                // dd(session()->all());
            $valid= $request->validate([
                'Uname'=>['required ','string'],
                'phone'=>['required','min:10','max:10'],
                'email'=>'required',
                'pass'=>['required','min:4'],
                'cpass'=>['required','same:pass']
            ]);
            
            if ($this->chkexists($request->Uname,$request->email)) {
                
                // echo Hash::make(random_bytes(32));
                return redirect('/Sign_Up')->with('exists','User Name or Email already Exists');
            }else{
                // get register
                $signup= new Signup;
                $uname=strip_tags($request->Uname);
                $passw=Hash::make(strip_tags($request->pass));
                $cpassw=Hash::make(strip_tags($request->cpass));
                $em=strip_tags($request->email);
                $ph=strip_tags($request->phone);
                $stat='inactive';
                $uiden=Hash::make(random_bytes(32));
                $signup->UserName=$uname;
                $signup->Password=$passw;
                $signup->Email=$em;
                $signup->UserMobile=$ph;
                $signup->status=$stat;
                $signup->uidenkk=$uiden;
                if($signup->save() )                    
                return redirect('/Sign_Up')->with('reg','Registration Successfully !!');
                else
                return redirect('/error');
 
            }
            // dd( session()->all());
    }
    function chkexists($uname,$email){

        if (DB::table('usersignupinfo')->where('UserName',$uname)->orWhere('email',$email)->exists()) {
            return true;
        }

    }
}
