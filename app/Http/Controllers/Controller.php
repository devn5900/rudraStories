<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;
use App\Models\ProfileModel;
use Illuminate\Routing\Controller as BaseController;

class Controller extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;
    
    function getProfile(){
        if(session()->has('usnm','loginstat','usiden')){
            $users = ProfileModel::select('images')->where('UserName',session('usnm'))->get();
            session()->put();
        }
    }
}
