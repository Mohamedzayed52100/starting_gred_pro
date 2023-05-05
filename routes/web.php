<?php

use App\Http\Controllers\StudentController;
use Illuminate\Support\Collection;
use Illuminate\Support\Facades\Route;
use PhpParser\ErrorHandler\Collecting;
use Illuminate\Support\Facades\Auth;


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

Route::get('/', function () {







    $name ="mohamed ";
    $age  =22;
    $job ="software engineer";
    $lo ="Google";


    return view('welcome' , get_defined_vars());





    Collection::macro('toUppertest' , function(){
        return $this->map(function($value){
            return strtoupper($value);
        });

    });
    $collect=collect(['mohamed' , 'ahmed' , 'yousef' , 'mahmoud'])->toUppertest();
    return $collect->all();



    ///Lazy collection
    /*
    for reduce memory
    */




    return $collect->sum();

});






Auth::routes();

// Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');



// Route::any('/' , function(){
//     return 'mohamed zayed';
// });




Route::get('/'  , function()  {
    session()->regenerate();
    session()->invalidate();
    return view('website');

});


Route::get('doctorlogin', function() {
    return redirect('/login');
});
Route::get('patientlogin', function() {
    return redirect('/login');
});
// Route::redirect('home'  , 'logout');

Route::get('Logout', function() {
     session()->regenerate();
    session()->invalidate();
    return redirect('/');

});



Route::get('home' , function(){
    session()->regenerate();
    session()->invalidate();
    return redirect('/');


});



Route::get('justTest' , [StudentController::class,'justTest']);


/*
29/4 officially zayed is Contstant at Ecpc 2023

*/


