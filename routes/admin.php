<?php
/**
 * Created by PhpStorm.
 * User: dell
 * Date: 2018/10/29
 * Time: 22:13
 */

use Illuminate\Support\Facades\Route;
use Illuminate\Contracts\Routing\Registrar as RouteRegisterContract;

// 登录
Route::get('/login', LoginController::class.'@login');
//
Route::post('/register', LoginController::class.'@register');




