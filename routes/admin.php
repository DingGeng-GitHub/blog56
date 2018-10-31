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
//Route::any('/login', \app\Admin\Controllers\LoginController::class.'@login');
Route::any('/login', LoginController::class.'@login');