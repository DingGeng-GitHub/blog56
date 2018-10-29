<?php
/**
 * Created by PhpStorm.
 * User: dell
 * Date: 2018/10/29
 * Time: 22:22
 */

namespace app\Admin\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Request;
use App\Admin\Requests\ValidateLoginRequest;

class LoginController extends Controller
{
    // 登录
    public function login(Request $request, ValidateLoginRequest $validateLoginRequest){

    }
}