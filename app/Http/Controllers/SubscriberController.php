<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\SubscriberModel;

class SubscriberController extends Controller
{
    //
    function show(Request $request)
    {

        $eml = strip_tags($request->susuid);
        $tkn = strip_tags($request->_token);
        if (session()->has('usnm', 'loginstat', 'usiden')) {

            if (SubscriberModel::where('Subscriber_Identy', session('usiden'))->exists()) {

                if (SubscriberModel::where('Subscriber_Identy', session('usiden'))->delete()) {

                    return 1;
                } else {
                    return 0;
                }
            } else {

                $sub = new SubscriberModel;
                $sub->Subscriber_Identy = session('usiden');
                $sub->Subscriber_Email = $eml;
                if ($sub->save()) {
                    return 202;
                } else {
                    return 404;
                }
            }
        }
    }
}
