<?php
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MemberController;
use App\Http\Controllers\ActivityController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\Medicin;
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


Auth::Routes();
Route::get('/',[HomeController::class,"index"]);
Route::get('/home',[HomeController::class,"index"]);
Route::get("/home/member/{id}",[MemberController::class,"show"]);
Route::post("/home/member/{id}",[MemberController::class,"update"]);
Route::get("/home/signMe",[MemberController::class,"create"]);
Route::post("/home/signMe",[MemberController::class,"store"]);
Route::get("/home/member/editMyInfo/{id}",[MemberController::class,"edit"]);
Route::get("/home/list",[MemberController::class,"index"]);
Route::get("/home/activity/{id}",[ActivityController::class,"show"]);
Route::get("/home/activityList",[ActivityController::class,"index"]);
Route::get("/home/addActivity/{id}",[ActivityController::class,"create"]);
Route::post("/home/addActivity/{id}",[ActivityController::class,"store"]);
Route::get("/home/editAcivity/{id}",[ActivityController::class,"edit"]);
Route::post("/home/editAcivity/{id}",[ActivityController::class,"update"]);
Route::get("/home/deleteAcivity/{id}",[ActivityController::class,"destroy"]);
Route::get("/home/contact",function(){
    return view("contact");
});

Route::get("/product",[Medicin::class,"create"]);
Route::post("/medecines",[Medicin::class,"store"]);
Route::get("/MedicinList",[Medicin::class,"index"]);
Route::get("/edit/{id}",[Medicin::class,"edit"]);
Route::post("/edit/{id}",[Medicin::class,"update"]);
Route::get("/delete/{id}",[Medicin::class,"destroy"]);

