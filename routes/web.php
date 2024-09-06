<?php

use Illuminate\Support\Facades\Route;

use App\Http\Middleware\AgeChack;

use App\Http\Middleware\CountryChack;

Route::get('/', function () {
    return view('welcome');
});


Route::view('home','home')->middleware(AgeChack::class);

Route::view('about','about')->middleware([AgeChack::class,CountryChack::class]);


Route::view('view1','home')->middleware([AgeChack::class]);
// Route::view('view2','about');

//Group of middleware apple on single Routes

    // Route::view('show','middleware')->middleware('check1');



//Group of middleware apple on Group of Routes

    // Route::middleware('check2')->group(function(){
    //     Route::view('home','home');
    //     Route::view('about','about');
    //     Route::view('view1','home');
    //     Route::view('view2','about');

    // });