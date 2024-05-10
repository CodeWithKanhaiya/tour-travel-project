<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\travelController;
use App\Http\Controllers\Admin\contactController;
use App\Http\Controllers\Admin\ticketorderController;
use App\Http\Controllers\Admin\brandController;
use App\Http\Controllers\Admin\categoryController;
use App\Http\Controllers\Admin\bookingController;
use App\Http\Controllers\Admin\feedbackController;
use App\Http\Controllers\Admin\AdminLoginController;
use App\Http\Controllers\Admin\HomeController;
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

Route::get('/', function () {
    return view('welcome');
});
Route::get('/index',[travelController::class,'index'])->name('index');
Route::get('/about',[travelController::class,'about'])->name('about');
Route::get('/blog',[travelController::class,'blog'])->name('blog');
Route::get('/contact',[travelController::class,'contact'])->name('contact');
Route::get('/gallery',[travelController::class,'gallery'])->name('gallery');
Route::get('/trip',[travelController::class,'trip'])->name('trip');

//contact crud controller   
Route::get('/contactindex',[contactController::class,'index'])->name('contactindex');
Route::get('contact',[contactController::class,'create'])->name('contact');
Route::post('insertData',[contactController::class,'insert'])->name('insertData');
Route::get('updateData/{id}',[contactController::class,'updateData'])->name('update');
Route::POST('postData',[contactController::class,'postData'])->name('postData');
Route::get('/deleteData/{id}',[contactController::class,'delete'])->name('delete');
///=============================================================================
//ticket crud controller   
Route::get('/ticketindex',[ticketorderController::class,'index'])->name('tickettindex');
Route::get('ticketorder',[ticketorderController::class,'create'])->name('ticketorder');
Route::post('insertData',[ticketorderController::class,'insert'])->name('insertData');
Route::get('updateData/{id}',[ticketorderController::class,'updateData'])->name('update');
Route::POST('postData',[ticketorderController::class,'postData'])->name('postData');
Route::get('/deleteData/{id}',[ticketorderController::class,'delete'])->name('delete');
///=============================================================================
//brand crud controller   
Route::get('/brand',[brandController::class,'index'])->name('brand');
Route::get('addbrand',[brandController::class,'create'])->name('addbrand');
Route::post('insertData',[brandController::class,'insert'])->name('insertData');
Route::get('updateData/{id}',[brandController::class,'updateData'])->name('update');
Route::POST('postData',[brandController::class,'postData'])->name('postData');
Route::get('/deleteData/{id}',[brandController::class,'delete'])->name('delete');
///=============================================================================
//category crud controller   
Route::get('/category',[categoryController::class,'index'])->name('category');
Route::get('addcategory',[categoryController::class,'create'])->name('addcategory');
Route::post('insertData',[categoryController::class,'insert'])->name('insertData');
Route::get('updateData/{id}',[categoryController::class,'updateData'])->name('update');
Route::POST('postData',[categoryController::class,'postData'])->name('postData');
Route::get('/deleteData/{id}',[categoryController::class,'delete'])->name('delete');
///=============================================================================
//booking  
Route::get('/booking',[bookingController::class,'index'])->name('booking');
Route::get('addbooking',[bookingController::class,'create'])->name('addbooking');
Route::post('insertData',[bookingController::class,'insert'])->name('insertData');
Route::get('updateData/{id}',[bookingController::class,'updateData'])->name('update');
Route::POST('postData',[bookingController::class,'postData'])->name('postData');
Route::get('/deleteData/{id}',[bookingController::class,'delete'])->name('delete');
///=============================================================================
// feedback
Route::get('/feedback',[feedbackController::class,'index'])->name('feedback');
Route::get('addfeedback',[feedbackController::class,'create'])->name('addfeedback');
Route::post('insertData',[feedbackController::class,'insert'])->name('insertData');
Route::get('updateData/{id}',[feedbackController::class,'updateData'])->name('update');
Route::POST('postData',[feedbackController::class,'postData'])->name('postData');
Route::get('/deleteData/{id}',[feedbackController::class,'delete'])->name('delete');
///=============================================================================
