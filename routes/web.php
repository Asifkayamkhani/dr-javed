<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\FrontedController;
use App\Http\Controllers\BackendController;
use App\Http\Controllers\CustomAuthController;
use App\Http\Controllers\GalleryController;
use App\Http\Controllers\ServiceController;
use App\Http\Controllers\BannerController;
use App\Http\Controllers\TestimonialController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

// Route::get('/', function () {
//     return view('welcome');
// });


// fronted page show web 
Route::get('/',[FrontedController::class,'home']);
Route::get('About',[FrontedController::class,'about']);
Route::get('Services',[FrontedController::class,'services']);
Route::get('Gallery',[FrontedController::class,'gallery']);
Route::get('Appointment',[FrontedController::class,'appointment']);
Route::get('Contact',[FrontedController::class,'contact']);
Route::get('Confirmation',[FrontedController::class,'confirmation']);
Route::get('profile',[FrontedController::class,'profile']);



// appointment submit in data base and email web 
Route::post('Appointment',[BackendController::class,'form_save']);



// contact us submit in data base and mail web 
Route::post('Contact',[BackendController::class,'contact_mail']);


// login and register web for admin panel
Route::get('dashboard', [CustomAuthController::class, 'dashboard'])->name('dashboard');
Route::get('login', [CustomAuthController::class, 'index'])->name('login');
Route::post('custom-login', [CustomAuthController::class, 'customLogin'])->name('login.custom');
Route::get('register', [CustomAuthController::class, 'registration'])->name('register');
Route::post('custom-registration', [CustomAuthController::class, 'customRegistration'])->name('register.custom');
Route::get('signout', [CustomAuthController::class, 'signOut'])->name('signout');

// Forget password web 
Route::get('otp-send',[CustomAuthController::class,'email']);
Route::post('otp-send',[CustomAuthController::class,'otp_send']);
Route::get('verify-otp/{id}',[CustomAuthController::class,'otp']);
Route::post('verify-otp/{id}',[CustomAuthController::class,'otp_verify']);
Route::get('change-password/{id}',[CustomAuthController::class,'password']);
Route::post('change-password/{id}',[CustomAuthController::class,'update_password']);



// dashboard lock web 
Route::group(['middleware'=>'auth'],function(){
    // dashboard show web 
    Route::get('admin',[BackendController::class,'admin']);    
    
    // backend web 
    Route::get('g-table',[BackendController::class,'appointment_table']); 
    Route::get('status-appointment/{id}',[BackendController::class,'status_appointment']);  
    Route::get('delete-appointment/{id}',[BackendController::class,'delete_appointment']);

    // contact web 
    Route::get('contact',[BackendController::class,'contact']); 
    Route::get('delete-contact/{id}',[BackendController::class,'delete_contact']); 
});




// gallery on dashboard web 
Route::get('galleryus',[GalleryController::class,'galleryus']);
Route::post('galleryus',[GalleryController::class,'galleryus_save']);

Route::get('gallery-table',[GalleryController::class,'g_table']);

Route::get('gallery-status/{id}',[GalleryController::class,'status_gallery']);

Route::get('delete-gallery/{id}',[GalleryController::class,'delete_gallery']);

Route::get('gallery-edit/{id}',[GalleryController::class,'gallery_edit']);
Route::post('gallery-edit/{id}',[GalleryController::class,'edit_update']);


// services on dashboard web

Route::get('servicesus',[ServiceController::class,'servicesus']);
Route::post('servicesus',[ServiceController::class,'services_save']);

Route::get('services-table',[ServiceController::class,'s_table']);

Route::get('service-status/{id}',[ServiceController::class,'status_services']);

Route::get('delete-services/{id}',[ServiceController::class,'delete_services']);

Route::get('services-edit/{id}',[ServiceController::class,'services_edit']);
Route::post('services-edit/{id}',[ServiceController::class,'edit_update']);


// banner web 
Route::get('bannerus',[BannerController::class,'bannerus']);
Route::post('bannerus',[BannerController::class,'save_banner']);

Route::get('banner-table',[BannerController::class,'b_table']);

Route::get('banner-status/{id}',[BannerController::class,'b_status']);

Route::get('banner-delete/{id}',[BannerController::class,'b_delete']);

Route::get('banner-edit/{id}',[BannerController::class,'b_edit']);
Route::post('banner-edit/{id}',[BannerController::class,'b_save']);

// google web 
Route::get('googleus',[TestimonialController::class,'googleus']);
Route::post('googleus',[TestimonialController::class,'save_google']);

Route::get('google-table',[TestimonialController::class,'g_table']);

Route::get('google-status/{id}',[TestimonialController::class,'g_status']);

Route::get('google-delete/{id}',[TestimonialController::class,'g_delete']);

Route::get('google-edit/{id}',[TestimonialController::class,'g_edit']);
Route::post('google-edit/{id}',[TestimonialController::class,'g_save']);


