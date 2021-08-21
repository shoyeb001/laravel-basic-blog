<?php

use Illuminate\Support\Facades\Route;

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

Route::get('/','front\post@post_list');
Route::post('/admin/login_submit','Admin_auth@login');
Route::view('/admin/login','/admin/login'); 


Route::get('/admin/logout',function(){
   session()->forget('BLOG_USER_ID');
   return redirect('admin/login');
});

Route::group(['middleware'=>['adminAuth']],function(){
    Route::post('/admin/post/submit','admin\post@submit');
    Route::get('/admin/post/list','admin\post@listing');
    Route::view('/admin/post/add','/admin/post/add');
    Route::get('/admin/post/edit/{id}','admin\post@edit');
    Route::get('/admin/post/delete/{id}','admin\post@delete');
    Route::post('/admin/post/update/{id}','admin\post@update');
    Route::get('/admin/page/list','admin\page@listing');          //page start here
    Route::post('/admin/page/submit','admin\page@submit');
    Route::view('/admin/page/add','/admin/page/add');
    Route::get('/admin/page/edit/{id}','admin\page@edit');
    Route::get('/admin/page/delete/{id}','admin\page@delete');
    Route::post('/admin/page/update/{id}','admin\page@update');

});

//front route

Route::get('/post/{id}','front\post@details');
Route::get('/{slug}','front\post@page_content');


