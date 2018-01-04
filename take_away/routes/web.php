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
Route::group(["namespace"=>'Home'],function(){
	Route::get('/Home/index','HomeController@index');
	Route::post('/Home/add','HomeController@add');
});
Route::group(["namespace"=>'Admin'],function(){
	Route::get('/Admin/login','LoginController@login');//后台登陆
	Route::get('/Admin/index','IndexController@index');//后台首页
	Route::get('/Admin/product','ProductController@product_list');//菜品展示
	Route::get('/Admin/product_detail','ProductController@product_detail');//菜品添加
	Route::get('/Admin/recycle_bin','ProductController@recycle_bin');//菜品回收站
	Route::get('/Admin/order_list','OrderController@order_list');	//订单列表
	Route::get('/Admin/order_detail','OrderController@order_detail');//订单详情
	Route::get('/Admin/user_list','UserController@user_list');//用户列表
	Route::get('/Admin/user_detail','UserController@user_detail');//用户添加
	Route::get('/Admin/user_update','UserController@user_update');//用户修改
	Route::get('/Admin/express_list','ExpressController@express_list');//配送方式
	Route::get('/Admin/pay_list','ExpressController@pay_list');//支付方式
	Route::get('/Admin/sales_volume','SalesController@sales_volume');//销量统计
	Route::get('/Admin/consumption','BuyersController@consumption');//消费记录
	Route::get('/Admin/evaluate','BuyersController@evaluate');//评价记录
	Route::get('/Admin/message','BuyersController@message');//留言记录
	Route::get('/Admin/adver','PictureController@adver');//广告管理
	Route::get('/Admin/adver_detail','PictureController@adver_detail');//广告添加
	Route::get('/Admin/clas','PictureController@clas');//分类管理
	Route::get('/Admin/clas_detail','PictureController@clas_detail');//分类添加
});