<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class CategoryDispController extends Controller
{
    //
    function show($id, $hash)
    {
        $sid = strip_tags($id);
        $shash = strip_tags($hash);
        if (DB::table('story_type')
            ->where('sno', $sid)->where('type_iden', $shash)
            ->exists()
        ) {
 
            $stry = DB::table('all_stories')
                ->select(
                    'all_stories.story_id',
                    'all_stories.story_heading',
                    'all_stories.story_desc',
                    'all_stories.story_identy',
                    'all_stories.images'
                )
                ->where('story_type', $sid)
                ->get();
            $cate = DB::table('story_type')->inRandomOrder()->get();
            $stype = DB::table('story_type')
                ->where('sno', $sid)->where('type_iden', $shash)
                ->get();
            return view('homeAndStories.catedisp')->with([
                'stry' => $stry,
                'cate' => $cate, 'stty' => $stype
            ]);
        } else {
            return redirect('/error');
        }
    }


   

}
