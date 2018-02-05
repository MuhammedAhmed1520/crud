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

/*
 Admin Route

 */
Route::group(['middleware' => ['web']],function(){

    Route::get('/', function () {
        return view('welcome');
    });

    Auth::routes();

    Route::get('/home',[
        'uses' => 'HomeController@index',
        'as' => 'home',
    ]);



    Route::get('/slider',[
        'uses' => 'SliderController@index',
        'as' => 'slider',
    ]);
    Route::get('/slider/Add-New-Slider',[
        'uses' => 'SliderController@sliderAdd',
        'as' => 'add.slider',
    ]);
    Route::post('/slider/Add',[
        'uses' => 'SliderController@addNewSlider',
        'as' => 'add.new.slider',
    ]);
    Route::get('/slider/delete/{slider_id}',[
        'uses' => 'SliderController@deleteSlider',
        'as' => 'slider.delete',
    ]);
    Route::get('/slider/edit/{slider_id}',[
        'uses' => 'SliderController@sliderEdit',
        'as' => 'slider.edit',
    ]);
    Route::post('/slider/edited/{slider_id}',[
        'uses' => 'SliderController@editSlider',
        'as' => 'edit.slider',
    ]);




    Route::get('/service',[
        'uses' => 'serviceController@index',
        'as' => 'service',
    ]);
    Route::get('/service/Add-New-Service',[
        'uses' => 'ServiceController@serviceAdd',
        'as' => 'add.service',
    ]);
    Route::post('/service/Add',[
        'uses' => 'ServiceController@addNewService',
        'as' => 'add.new.service',
    ]);
    Route::get('/service/delete/{service_id}',[
        'uses' => 'ServiceController@deleteService',
        'as' => 'service.delete',
    ]);
    Route::get('/service/edit/{service_id}',[
        'uses' => 'ServiceController@serviceEdit',
        'as' => 'service.edit',
    ]);
    Route::post('/service/edited/{service_id}',[
        'uses' => 'ServiceController@editService',
        'as' => 'edit.service',
    ]);





    Route::get('/setting',[
        'uses' => 'SettingController@index',
        'as' => 'setting',
    ]);
    Route::post('/setting/update',[
        'uses' => 'SettingController@updateSetting',
        'as' => 'setting.update',
    ]);
});

/*
 User Route
 */


