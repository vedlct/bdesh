<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/


//Route::view('/','home.index');

Route::get('/',function (){
    return view('home.index');
})->name('home');

Route::get('/rohingya',function (){
    return view('pages.rohingya');
})->name('rohingya');

Route::get('/about',function (){
    return view('pages.about');
})->name('about');

Route::get('/projects',function (){
    return view('pages.projects');
})->name('projects');

Route::get('/contact',function (){
    return view('pages.contact');
})->name('contact');

Route::get('/tubewell-sanitation',function (){
    return view('pages.tubewellSanitation');
})->name('tubewellSanitation');

Route::get('/multimedia',function (){
    return view('pages.multimedia');
})->name('multimedia');

Route::get('/food',function (){
    return view('pages.foodBank');
})->name('food');

Route::get('/health-care',function (){
    return view('pages.healthCare');
})->name('health');

Route::get('/children-welfare',function (){
    return view('pages.childrenWelfare');
})->name('childrenwelfare');

Route::get('/ramadan-food',function (){
    return view('pages.ramadanFood');
})->name('ramadanFood');


