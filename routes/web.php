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

Route::get('/','HomeController@index')->name('home');
Route::get('/single-project/{slug}','ProjectController@singlePost')->name('project.singlePost');
//Route::get('/rohingya',function (){
//    return view('pages.rohingya');
//})->name('rohingya');

Route::get('/rohingya', 'RohingyaController@index')->name('rohingya');
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
/* test bluepay*/
Route::get('/test','PaymentController@makePayment');
/* end test bluePay*/
Route::view('/family-event','pages.familynightevent')->name('familyEvent');

Route::view('/zakat','pages.zakat')->name('zakat');

Route::view('/videogallery','pages.videogallery')->name('videogallery');

Route::view('/welfare','pages.welfare')->name('welfare');

Route::view('/healthgallery','pages.healthgallery')->name('healthgallery');

Route::view('/faqs','pages.faqs')->name('faqs');

Route::view('/creditcard','pages.creditcard')->name('creditcard');

Route::view('/pastevents','pages.pastevents')->name('pastevents');

Route::view('/upcomingEvents','pages.upcomingEvents')->name('upcomingEvents');

Route::post('/Donation','PaymentController@makeDonation')->name('payment.donationPay');


Auth::routes();

//Route::get('/home', 'HomeController@index')->name('home');
Route::group(['middleware' => ['auth']],function () {
    Route::get('/admin', function () {
        return view('index');
    })->name('admin.dashboard');

    /*
     * Project Route
     */
    Route::get('/project/create', 'ProjectController@createProject')->name('project.create');
    Route::get('/project/update/{id}', 'ProjectController@updateProject')->name('project.update');
    Route::get('/project/show', 'ProjectController@showProject')->name('project.show');
    Route::post('/project/store', 'ProjectController@storeProjectData')->name('project.store');
    Route::post('/project/update', 'ProjectController@updateProjectData')->name('project.updateData');
    Route::post('/project/delete', 'ProjectController@deleteProject')->name('project.delete');
    Route::post('delete/image', 'ProjectController@deleteProjctImage')->name('project.image.delete');
    Route::post('/saveToHome','ProjectController@saveToHome')->name('project.saveToHome');

    /*
     * event Route
     */

    Route::get('/event/create', 'EventController@createEvent')->name('event.create');
    Route::get('/event/update/{id}', 'EventController@updateEvent')->name('event.update');
    Route::get('/event/show', 'EventController@showEvents')->name('event.show');
    Route::post('/event/store', 'EventController@storeEvent')->name('event.store');
    Route::post('/event/updateData', 'EventController@updateEventData')->name('event.updateData');
    Route::post('/event/delete', 'EventController@deleteEvent')->name('event.delete');
    Route::post('event/image', 'EventController@deleteProjctImage')->name('event.image.delete');


    /*
     * Event Page Home
     */
    Route::get('/event/show/all', 'EventController@showEventsPage')->name('event.showEventsPage');
    Route::get('event/show/single/{id}','EventController@singleEvent')->name('event.singleEvent');

    /*
     * Rohingya Projects
     */
    Route::get('/rohingya/show/all', 'RohingyaController@show')->name('rohingya.show');
    Route::get('/rohingya/create', 'RohingyaController@create')->name('rohingya.create');
    Route::get('/rohingya/edit/{id}', 'RohingyaController@edit')->name('rohingya.edit');
    Route::post('/rohingya/store', 'RohingyaController@saveData')->name('rohingya.saveData');
    Route::post('/rohingya/update', 'RohingyaController@updateData')->name('rohingya.updateData');
    Route::post('/rohingya/delete', 'RohingyaController@delete')->name('rohingya.delete');

});