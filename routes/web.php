<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\SignUpController;
use App\Http\Controllers\LogInController;
use App\Http\Controllers\StoryPartController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\CategoryDispController;
use App\Http\Controllers\CommentController;
use App\Http\Controllers\LikeController;
use App\Http\Controllers\StryPartLikeController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\ProfilePicUploadController;
use App\Http\Controllers\SubscriberController;
use App\Models\SubscriberModel;
use App\Http\Controllers\StryPartCmntController;
use App\Models\StryPartCmntModel;
use App\Http\Controllers\HelpController;
use App\Http\Controllers\dashController;
use App\Http\Controllers\wrtieNewStory;
use App\Http\Controllers\typestrupnw;
use App\Http\Controllers\editStory;
use App\Http\Controllers\updateEditedStory;
use App\Http\Controllers\finallyUpdateStory;
use App\Http\Controllers\delStory;
use App\Http\Controllers\adminUsers;
use App\Http\Controllers\MsgController;
use App\Http\Controllers\ThoughtsController;
use Illuminate\Support\Facades\DB;
// display index elements 
Route::get('/', [App\Http\Controllers\IndexController::class, 'idexDisplay']);

Route::get('/all_stories', [App\Http\Controllers\AllStoryController::class, 'show']);

Route::get('/about_me', function () {
    return  view('homeAndStories.aboutme');
});

// all category
Route::get('/category', [CategoryController::class, 'show']);

// show all story related to category
Route::get('/catedisp/{id}/{hash}', [CategoryDispController::class, 'show']);
// error
Route::get('/error', function () {
    return view('errors.404');
});

Route::get('/Log_Out', function () {

    session()->forget(['usnm', 'loginstat']);
    return redirect('/Log_In');
});
// for showing stories 
Route::get('/stories/{id}/{hash}', [App\Http\Controllers\ShowStoryController::class, 'show']);

// for showing story parts
Route::get('/storiespart/{id}/{hash}/{stryId?}', [StoryPartController::class, 'show']);
//  submit registration post request 
Route::post('/Sign_Up', [\App\Http\Controllers\SignUpController::class, 'show']);


Route::get('/Sign_Up', function () {
    if (session()->has(['usnm', 'loginstat'])) {
        return redirect('/');
    } else {

        return view('loginSignup.userSignup');
    }
});

//  login post request 
Route::post('/Log_In', [\App\Http\Controllers\LogInController::class, 'show']);
Route::get('/Log_In', function () {

    if (session()->has(['usnm', 'loginstat'])) {
        return redirect('/');
    } else {

        return view('loginSignup.userLogin');
    }
});

// read stories and fetch from db

// like for story

Route::post('/like', [App\Http\Controllers\LikeController::class, 'show']);
// part stry like
Route::post('/likes', [App\Http\Controllers\StryPartLikeController::class, 'show']);
// comment for story

Route::post('/cpmt/{name}', [CommentController::class, 'show']);

// story part cmnts
Route::post('/spcpmt/{idk}', [StryPartCmntController::class, 'show']);

// profile section

Route::get('/profile', [ProfileController::class, 'show']);
// edit profile pic
Route::post('/uploadusrpic', [ProfilePicUploadController::class, 'show']);

// subscribe notifications
Route::post('/subscriber', [SubscriberController::class, 'show']);


Route::get('/PrivacyPolicy', function () {

    return view('privacyTerms.privacyPolicy');
});

Route::get('/TermsAndCond', function () {

    return view('privacyTerms.TermsAndCondition');
});

Route::get('/disclm', function () {

    return view('privacyTerms.disclaimer');
});


Route::post('/help', [HelpController::class, 'show']);


// Admin Related services

Route::get('/admin', function () {
    return view('admin.login');
});


Route::get('/dashboard', [dashController::class, 'show']);

Route::get('/dash',  [dashController::class, 'dash']);

Route::get('/wrst', [typestrupnw::class, 'show']);

Route::get('/edst', [editStory::class,'show']);
Route::get('/cmntget', function () {
    return view('admin.comments');
});

Route::get('/books', function () {
    return view('admin.books');
});
Route::get('/modist/{stid}', [updateEditedStory::class,'show']);

Route::post('/strupnw', [wrtieNewStory::class, 'show']);

Route::post('/updsted', [finallyUpdateStory::class, 'show']);

Route::get('/strupnw', function(){
    return view('errors.404');

});
Route::post('/delistlo',[delStory::class,'show']);

Route::get('/thgt',function(){

        $th=  DB::table('thoughts')->select('Mainthought')->get();
     
    return view('admin.thoughts')->with(['thgt'=>$th]);
});
Route::post('/thgt',[ThoughtsController::class,'show'] );
Route::get('/ussr', [adminUsers::class,'show']);

Route::get('/msg', [MsgController::class,'show']);

Route::get('/AdLog',function(){
        return view('admin.navFooter.Alogin');
});