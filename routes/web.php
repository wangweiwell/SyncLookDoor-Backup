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

Route::get('/', function () {
    return view('welcome');
});

Route::get('/', 'StaticPagesController@home')->name('home');
Route::get('/help', 'StaticPagesController@help')->name('help');
Route::get('/about', 'StaticPagesController@about')->name('about');

Route::get('/signup','UsersController@create')->name('signup');

/**
 	 * Block comment
 	 * 新增的 resource 方法将遵从 RESTful 架构为用户资源生成路由。该方法接收两个参数，
 	 * 第一个参数为资源名称，第二个参数为控制器名称。
 	 * @param type
 	 * @return void
	 */
Route::resource('users','UsersController');
/* 生成的资源路由列表信息如下所示：
HTTP 请求	URL	动作	作用
GET	/users	UsersController@index	显示所有用户列表的页面
GET	/users/{user}	UsersController@show	显示用户个人信息的页面
GET	/users/create	UsersController@create	创建用户的页面
POST	/users	UsersController@store	创建用户
GET	/users/{user}/edit	UsersController@edit	编辑用户个人资料的页面
PATCH	/users/{user}	UsersController@update	更新用户
DELETE	/users/{user}	UsersController@destroy	删除用户*/
