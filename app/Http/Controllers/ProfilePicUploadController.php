<?php

namespace App\Http\Controllers;

use App\Models\ProfileModel;
use Illuminate\Http\Request;
use App\Models\ProfilePicUploadModel;
use Nette\Utils\Random;

class ProfilePicUploadController extends Controller
{
    //
    function show(Request $request){
       
        $validation= $request->validate([
            'usor4fg'=>'required|image',
            'mimes'=>'jpg,jpeg',
        ]);
        if ($request->file('usor4fg')->isValid()) {
            $name=$request->file('usor4fg');
            $fileName = pathinfo($name->getClientOriginalName(), PATHINFO_FILENAME);
            $realimg = $fileName."-".time().$name->getClientOriginalExtension();
            $dest=public_path('/userProfile');
            $rq=$name->move($dest,$realimg);
            ProfileModel::where('UserName',session('usnm'))->update(['images'=>$realimg]);
           return 'Successfully Uploaded';
        }
       
    }
   
}
