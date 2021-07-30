<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Hash;

class UserController extends Controller
{
    //登录
    public function Signin(Request $request)
    {
        if (checkIndentity($request) != null) {
            return responseToJson(Response::HTTP_BAD_REQUEST, checkIndentity($request));
        }

        $user = User::where('MOBILE', $request->MOBILE)->first();
        if (is_null($user)) {
            return responseToJson(Response::HTTP_BAD_REQUEST, '用户不存在');
        } else if (!Hash::check($request->PASSWORD, $user->PASSWORD)) {
            return responseToJson(Response::HTTP_BAD_REQUEST, '密码错误');
        }

        return responseToJson(Response::HTTP_OK, '登录成功', $user);
    }

    //注册
    public function Signup(Request $request)
    {
        if (checkIndentity($request) != null) {
            return responseToJson(Response::HTTP_BAD_REQUEST, checkIndentity($request));
        }

        $user = User::where('MOBILE', $request->MOBILE)->get();

        if ($user->count() > 0) {
            return responseToJson(Response::HTTP_BAD_REQUEST, '手机号码已经存在');
        }

        $u = new User();
        $u->ID = Str::uuid();
        $u->MOBILE = $request->MOBILE;
        $u->PASSWORD = Hash::make($request->PASSWORD);
        $u->save();

        return responseToJson(Response::HTTP_CREATED, '注册成功', User::find($u->ID));
    }
}
