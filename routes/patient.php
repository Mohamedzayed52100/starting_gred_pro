<?php

use App\Http\Controllers\PatientController;
use App\Http\Controllers\ReportPDFController;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;
use App\Http\Middleware\PatientLoginMiddleware;
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
/* patient */






Route::middleware(PatientLoginMiddleware::class)->group(function(){ ///begin of Middleware
 













    Route::any('gettest'  ,[PatientController::class, 'gettest']);
    Route::any('posttest'  ,[PatientController::class, 'posttest']);
    
    
    Route::any('test' , function(){
    
    
    
    
    
    
    
        return view('patient_pages.chat');
    
    
    
        $is_sucess=DB::table('just-test')->insert([
            'fname'=>'mohamed' ,
            'lanme'=>'zayed' ,
            'number'=>1 ,
    
    
        ]);
        if($is_sucess)return true;
        else return false;;
    
    
    
    
    
    
        return view('patient_pages.chat');
        return "iam zayed route";
    
    });
    Route::any('test2' , function(){
    
    
    
    
       return DB::table('patient')->latest()->first();
        return dd(session('patient_login'));
    
    $name="mohamed zayes";
        session([
            'name'=>$name,
        ]);
    
        return view('welcome');
        return "iam zayed route";
    
    });
    
    
    
    /*   coding With zayed now it's better zayed is pupil codeforces i want become sepcilist  */
    
    Route::controller(PatientController::class)->group(function(){
        Route::any('welcome' ,'welcome');
        Route::any('settingsPatient' ,'settingsPatient');
        Route::any('HomePatient' ,'HomePatient');
        Route::any('Patientprofile' ,'Patientprofile');
        Route::any('choose_disease' ,'choose_disease');
        Route::any('PatientRequestLab' ,'PatientRequestLab');
        Route::any('chat_patient' ,'chat_patient');
        Route::any('relative_list_patient' ,'relative_list_patient');
        Route::any('relativesOperation' ,'relativesOperation');
        Route::any('vitalSigns' ,'vitalSigns');
        Route::any('patient_reports' ,'patient_reports');
        Route::any('PatientLogin' ,'PatientLogin');
        Route::any('PatientLogout' ,'PatientLogout');
        //vitalSigns_submit -- patient_reports
        ///-------------------------------------
        Route::any('vitalSigns_submit' ,'vitalSigns_submit');
    
    });
    
    //////submited data through form /* now it's 3:48  | 9/2   */
    
    
    Route::controller(PatientController::class)->group(function(){
    
        ///-------------------------------------
        Route::any('vitalSigns_submit' ,'vitalSigns_submit');
        Route::any('changepassword' ,'vitalSigns_submit');
        Route::any('PatientRequestLab_submit' ,'PatientRequestLab_submit');
        Route::any('login_submit_p' ,'login_submit_p');
        Route::any('change_g_info' ,'change_g_info');
        Route::any('change_site_control' ,'change_site_control');
        Route::any('removeRelative/{id}' ,'removeRelative');
    
    });
    
    
    
    
    /*
    make coffe or tea
    */
    
    //Message to my team Don't comment about any code comment :(
    
    
    
        Route::get('/pdf', [ReportPDFController ::class, 'index'])->name('index');
    
    
    
    










}); ///////////////////////////////////////ending of middleware





Auth::routes();

// Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');