<?php
/**
 * Created by PhpStorm.
 * User: dell
 * Date: 2018/10/29
 * Time: 22:22
 */
namespace App\Admin\Controllers;


use App\Admin\Models\Users;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\Facades\Request;
use App\Admin\Requests\ValidateLoginRegisterRequest;

class LoginController extends Controller
{

    // 登录
    public function login(Request $request, Users $users/*, ValidateLoginRegisterRequest $ValidateLoginRegisterRequest*/){



    }

    // 注册
    public function register(Request $request, Users $users, ValidateLoginRegisterRequest $ValidateLoginRegisterRequest){

        // 接收参数
        $users->name = $request->post('name');
        $users->phone = $request->post('phone');
        $users->email = $request->post('email');
        $users->password = $request->post('password');
        $users->remember = $request->post('remember');

    }
}