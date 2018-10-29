<?php
/**
 * Created by PhpStorm.
 * User: dell
 * Date: 2018/10/29
 * Time: 22:13
 */

use Illuminate\Support\Facades\Route;

// 登录
Route::post('login', app\Admin\Controllers\LoginController::class."@login");