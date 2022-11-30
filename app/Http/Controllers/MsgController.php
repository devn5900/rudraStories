<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\MsgModel;
class MsgController extends Controller
{
    //

    function show(){

        $msg= new MsgModel;
       $data= $msg::all()->paginate(3);
        return view('admin.messages')->with(['data'=>$data]);
    }
}
