<?php
/**
 * Created by PhpStorm.
 * User: dell
 * Date: 2018/10/29
 * Time: 22:22
 */
namespace App\Admin\Controllers;

use View;
use App;
use App\Admin\Models\Users;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\Facades\Request;
use App\Admin\Requests\ValidateLoginRegisterRequest;

class LoginController extends Controller
{

    // 登录
    public function login(Request $request, Users $users, ValidateLoginRegisterRequest $ValidateLoginRegisterRequest){

        $columns = Schema::getColumnListing('users');
        return view('admin.login');

    }
}