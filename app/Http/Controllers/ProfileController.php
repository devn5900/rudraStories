<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\ProfileModel;
use GuzzleHttp\Handler\Proxy;
use Symfony\Component\HttpFoundation\Session\Session;
use Illuminate\Support\Facades\DB;
use App\Models\SubscriberModel;

class ProfileController extends Controller
{
    function show(){
        session()->forget('url');
        if(session()->has(['usnm','loginstat','usiden'])){

            // dd($snid);
             
           $ssn= session()->get('usnm');
            $users = ProfileModel::select('UserName','Email','UserMobile','images')->where('UserName',$ssn)->get();
            // $data=ProfileModel::where('uidenkk',$snid)->get();
            // var_dump($users->Email);
            if (SubscriberModel::where('Subscriber_Identy',session('usiden'))->exists()) {
                $val='UnSubscribe';
            }else{
                
                $val='Subscribe';
            }
            return view('loginSignup.userProfile')->with(['data'=>$users,'latest'=>$this->idexDisplay(),'subs'=>$val]);

        }else{           
            return redirect('/Log_In');
        }
    }
    function idexDisplay(){

        $latest = DB::table('all_stories')
        ->select('all_stories.story_id','all_stories.story_heading','all_stories.story_desc',
        'all_stories.images','all_stories.stry_likes','all_stories.story_identy','all_stories.view')
        ->latest('post_time','asc')
        ->limit(4)
        ->get();
        return $latest;
    }
}
