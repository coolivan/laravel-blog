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

//Route::get('/',function (){
//    return view('welcome');
//});



Route::get('/','PostController@index');




Route::group(['prefix'=>'posts'],function () {
    //文章列表页
    Route::get('','PostController@index');
    //文章详情页
    Route::get('{post}','PostController@show')->where('post', '[0-9]+');
});




Route::group(['prefix'=>'admin'],function () {

    //权限管理
    Route::get('/login','UserController@toLogin')->name('login');//http/middleware/authenticate->login
    Route::post('/login','UserController@doLogin');

//    Route::get('/register','UserController@toRegister');
//    Route::post('/register','UserController@doRegister');


    Route::group(['middleware'=>'auth:web'],function (){

        Route::get('/','AdminController@index');

        Route::get('/logout','UserController@logout');
        //人员管理
        Route::get('/users','UserController@index');
        Route::get('/users/create','UserController@create');
        Route::post('/users/store','UserController@store');
        Route::get('/users/{user}/edit','UserController@edit');
        Route::post('/users/{user}/update','UserController@update');
        Route::get('/users/{user}/delete','UserController@delete');

        //内容管理
        Route::get('/posts','AdminController@post_index');//获取
        Route::get('/posts/create','AdminController@post_create');//新增
        Route::post('/posts/store','AdminController@post_store');//保存
        Route::get('/posts/{post}/delete','AdminController@post_delete');//删除
        Route::get('/posts/{post}/edit','AdminController@post_edit');//编辑
        Route::post('/posts/{post}/update','AdminController@post_update');//更新
        Route::get('/posts/{post}/status','AdminController@post_status');//状态
        Route::post('/posts/uploadfile','AdminController@uploadfile');//上传


    });



});
