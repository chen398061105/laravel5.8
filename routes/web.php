<?php

/*
laravel 练习，复习专用项目
*/

Route::get('/', function () {
    return view('welcome');
});
Route::get('one','TestController@index');
//设置别名的重定向 访问one 跳到b
Route::get('a','TestController@a')->name('b');
//视图路由
Route::view('view1','demo.one',['id'=>10]);

//获取当前路由信息
Route::get('test',function (){
//    dd(Route::current()->action); //当前路由信息
//    dd(\Illuminate\Support\Facades\Route::currentRouteAction()); //返回当前路由指定的方法
    return \Illuminate\Support\Facades\Route::currentRouteName();//获取控制器的方法
});
//响应设置。重定向
Route::get('res','TestController@res');
Route::get('res1',function (){
    return redirect()->away('www.baidu.com');//重定向到外网
});

//资源路由 php artisan make:controller ApiController --resource
Route::resource('app','AppController');
//资源类型嵌套其他的
//Route::resource('app.api','ApiController')->shallow();

//api资源路由 会排掉edit 和create页面 php artisan make:controller ApiController --api
Route::apiresource('api','ApiController');
//db
Route::get('db/index','DataController@index');
//软删除
Route::get('db/del','DataController@del');
Route::get('db/show','DataController@show');

//表关联
//Route::get('db/list','DataController@list');
Route::get('db/debugInfo','DataController@debugInfo');
//表单,表单验证
Route::get('putform','TestController@putform');
Route::post('form','TestController@form');

//验证类的使用，创建自定义验证 php artisan make:request Form


//中间件,指定路由中间件，如果是全局中间件则不管执行那个路由都会执行
Route::get('admin','LoginController@index')->middleware('login');
//$middlewareGroups 组中间件 设置一堆中间件 给指定路由q
Route::get('login','LoginController@login');
//模板继承
Route::get('info','LoginController@blade');

//回退路由，让不存在的路由放回指定页面，必须放在最后
Route::fallback(function (){
//    return redirect('/');
    return view('error.404');
});