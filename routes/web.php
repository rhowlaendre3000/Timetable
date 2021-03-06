<?php

use Illuminate\Support\Facades\View;
use App\Http\Controllers\paymentController;
use App\Http\Controllers\RouteController;

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
Route::get('/test',function(){

    return view('register');
});


//Route::get('tickets/genpdf', 'ticketsController@generatePDF');
Route::get('payment', 'paymentController@index');
//Route::post('/checkout/initiate','paymentController@acceptpayment');


Route::get('/',function(){

    return view('auth.login');
});

Route::get('/proftest',function(){

    return view('finalprofile');
});

//Route::resource('/trains','trainsController')->middleware('auth');
//Route::resource('/tickets','ticketsController')->middleware('auth');

Route::get('/userprofile','formController@profile');
Route::resource('/index', 'formController');
//Route::resource('profiles', 'profilesController')->middleware('auth');
//Route::resource('/routes', 'RouteController')->middleware('auth');
Route::resource('/programme', 'programmeController')->middleware('auth');
Route::resource('/course', 'courseController')->middleware('auth');
Route::resource('/venue', 'venueController')->middleware('auth');
Route::get('/loadpdf{id}','timetableController@pdf')->middleware('auth');
Route::resource('/timetable', 'timetableController')->middleware('auth');
Route::resource('/report', 'reportController')->middleware('auth');
//Route::resource('/schedule', 'scheduleController')->middleware('auth');


Auth::routes();

//Route::get('/home', 'HomeController@index')->name('home');

Route::group(['middleware'=>['auth','web']], function(){
    

    Route::get('/home', function(){
        if(Auth::user()->admin==0){
            return view('home');
        }else{
            //$users['users']=\App\User::paginate(10);
        return view('users.dashboard'/*, $users*/);
        }
    });

    Route::get('dash', function(){

        return view('users.dashboard');
    });
    Route::get('/all', function(){
        $users['users']=myTimeTable\User::paginate(10);

        return view('users.all',$users);
    });

});

//Route::get('/hire', 'hireController@index');

