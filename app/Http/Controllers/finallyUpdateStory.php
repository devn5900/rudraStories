<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\updatEditedStory;

class finallyUpdateStory extends Controller
{
    //
    function show(Request $rq)
    {

        $valid = $rq->validate([
            'sthd4500' => ['required ', 'string'],
            'stty4500' => ['required', 'string'],
            'stdesc4500' => ['required', 'string'],
            'stwr4500' => ['required', 'string'],
            'stmn4500' => ['required', 'string'],
            'stfl4500' => 'mimes:png,jpeg,jpg|max:500',

        ]);
        $sthd = strip_tags(trim($rq->sthd4500));
        $stty = strip_tags(trim($rq->stty4500));
        $stdesc = strip_tags(trim($rq->stdesc4500));
        $stwr = strip_tags(trim($rq->stwr4500));
        $stfl = strip_tags(trim($rq->stfl4500));
        $stmn = strip_tags(trim($rq->stmn4500));
        $stiden = strip_tags(trim($rq->stide4500));

        if ($this->ifstryexis($stiden)) {

            if ($this->ifsttype($stty)) {

                // $update= new updatEditedStory();
                // $update->story_heading= $sthd;
                // $update->story_type= $stty;
                // $update->story_desc= $stdesc;
                // $update->main_story= $stmn;
                // $update->written_by= $stwr;
                if (empty($stfl)) {
                    $up = updatEditedStory::where('Story_identy', $stiden)
                        ->update([
                            'story_heading' => $sthd,
                            'story_type' => $stty,
                            'story_desc' => $stdesc,
                            'main_story' => $stmn,
                            'written_by' => $stwr

                        ]);
                    if ($up) {
                        echo 'Update';
                    } else {
                        echo 'not Update';
                    }
                } else {

                    if ($rq->file('stfl4500')->isValid()) {
                        $name = $rq->file('stfl4500');
                        $fileName = pathinfo($name->getClientOriginalName(), PATHINFO_FILENAME);
                        $realimg = $fileName . "-" . time() . "." . $name->getClientOriginalExtension();
                        $dest = public_path('/storyImages');
                        $rqs = $name->move($dest, $realimg);
                        $stryimg = $realimg;
                        $up = updatEditedStory::where('Story_identy', $stiden)
                            ->update([
                                'story_heading' => $sthd,
                                'story_type' => $stty,
                                'story_desc' => $stdesc,
                                'main_story' => $stmn,
                                'written_by' => $stwr,
                                'images'=>$stryimg
    
                            ]);
                        if ($up) {
                            echo 'Update img';
                        } else {
                            echo 'not Update img';
                        }
                    }else{
                        echo "Images only in JPG,JPEG,PNG format";
                    }


                }

                // $update->images= $stfl;
            } else {

                echo 'story type not';
            }
        } else {
            echo 'story iden not';
        }
    }

    function ifstryexis($stiden)
    {
        return DB::table('all_stories')->where('story_identy', $stiden)->exists();
    }
    function ifsttype($stty)
    {

        return DB::table('story_type')->where('sno', $stty)->exists();
    }
}
