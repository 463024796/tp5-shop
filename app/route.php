<?php
// +----------------------------------------------------------------------
// | ThinkPHP [ WE CAN DO IT JUST THINK ]
// +----------------------------------------------------------------------
// | Copyright (c) 2006~2016 http://thinkphp.cn All rights reserved.
// +----------------------------------------------------------------------
// | Licensed ( http://www.apache.org/licenses/LICENSE-2.0 )
// +----------------------------------------------------------------------
// | Author: liu21st <liu21st@gmail.com>
// +----------------------------------------------------------------------
use think\Route;
//调用extend的路由类
$Route = new \Route;
$Route->route_rule();
//首页
Route::get('/', function () {
	return view('app/shop/view/index.html');
});
//商品详情页
Route::get("/product", function() {
    return view('app/shop/view/product.html');
});
//购物车
Route::get("/checkout", function() {
    return view('app/shop/view/checkout.html');
});
//登录
Route::get("/login", function() {
    return view('app/shop/view/login.html');
});
//contact
Route::get("/contact", function() {
    return view('app/shop/view/contact.html');
});
//collections
Route::get("/collections", function() {
    return view('app/shop/view/collections.html');
});
//payment
Route::get("/payment", function() {
    return view('app/shop/view/payment.html');
});
//register
Route::get("/register", function() {
    return view('app/shop/view/register.html');
});
//terms
Route::get("/terms", function() {
    return view('app/shop/view/terms.html');
});
return [
	//也可以这里添加路由规则
];