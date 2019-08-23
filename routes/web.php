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

Route::get('/', [
        'as'=>'home',
        'uses'=>'Home@showHome'
    ]
);

Route::group(['prefix'=>'Import'],function(){

    // new import route
    Route::get("/NewImport","Import@NewImport");

    // save import
    Route::post("/saveImports","Import@SaveImport");

    //Upload file data
    Route::post("/uploadFile","Import@UploadFile");
});

