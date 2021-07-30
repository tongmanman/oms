<?php

use Illuminate\Http\Request;

function responseToJson($code = 0, $msg = '', $data = [])
{
    return response()->json([
        'CODE' => $code,
        'MESSAGE'  => $msg,
        'DATA' => $data
    ]);
}

function checkIndentity(Request $request)
{
    if (!$request->filled('MOBILE')) {
        return '手机号码不能为空';
    } else if (!preg_match('/^1(3\d|4[5-9]|5[0-35-9]|6[2567]|7[0-8]|8\d|9[0-35-9])\d{8}$/', $request->MOBILE)) {
        return '手机号码格式有误';
    } else if (!$request->filled('PASSWORD')) {
        return '密码不能为空';
    }
}
