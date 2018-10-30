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
Route::any('/login', LoginController::class.'@login');

/*$this->app->router->group(['namespace' => 'Core\Controllers\PC','middleware'=>'web'], function($router) {
    require __DIR__ . '/../Routes/FrontPcRoutes.php';
});*/



