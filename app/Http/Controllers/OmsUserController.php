<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;
use App\Models\OmsUser;

class OmsUserController extends Controller
{
    //登录
    public function Signin(Request $request)
    {
        if (checkIndentity($request) != null) {
            return responseToJson(Response::HTTP_BAD_REQUEST, checkIndentity($request));
        }
        $user = OmsUser::where('mobile', $request->mobile)->first();
        if (is_null($user)) {
            return responseToJson(Response::HTTP_BAD_REQUEST, '用户不存在');
        } else if (!Hash::check($request->password, $user->password)) {
            return responseToJson(Response::HTTP_BAD_REQUEST, '密码错误');
        }
        saveSession($user);
        return responseToJson(Response::HTTP_OK, '登录成功');
    }

    //注册
    public function Signup(Request $request)
    {
        if (checkIndentity($request) != null) {
            return responseToJson(Response::HTTP_BAD_REQUEST, checkIndentity($request));
        }
        $user = OmsUser::where('mobile', $request->mobile)->get();
        if ($user->count() > 0) {
            return responseToJson(Response::HTTP_BAD_REQUEST, '手机号码已经存在');
        }
        $u = new OmsUser();
        $u->mobile = $request->mobile;
        $u->password = Hash::make($request->password);
        $u->save();
        saveSession(OmsUser::find($u->id));
        return responseToJson(Response::HTTP_CREATED, '注册成功');
    }
}
