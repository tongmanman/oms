<?php

use App\Models\OmsUser;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

function responseToJson($code = 0, $msg = '', $data = [])
{
    return response()->json([
        'code' => $code,
        'msg'  => $msg,
        'data' => $data
    ]);
}

function checkIndentity(Request $request)
{
    if (!$request->filled('mobile')) {
        return '手机号码不能为空';
    } else if (!preg_match('/^1(3\d|4[5-9]|5[0-35-9]|6[2567]|7[0-8]|8\d|9[0-35-9])\d{8}$/', $request->mobile)) {
        return '手机号码格式有误';
    } else if (!$request->filled('password')) {
        return '密码不能为空';
    }
}

function saveSession(OmsUser $user)
{
    session()->put("user.id", $user->id);
    session()->put("user.role", $user->is_agent == 0 ? 'member' : 'agent');
}
