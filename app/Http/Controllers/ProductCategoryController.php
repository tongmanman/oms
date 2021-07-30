<?php

namespace App\Http\Controllers;

use App\Models\ProductCategory;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Hash;

class ProductCategoryController extends Controller
{
    public function Store(Request $request)
    {
        if (ProductCategory::where('NAME', $request->NAME)->exists()) {
            return responseToJson(Response::HTTP_BAD_REQUEST, '类别名称重复');
        }
        $v = new ProductCategory();
        $v->ID = Str::uuid();
        $v->NAME = $request->NAME;
        $v->PARENTID =  $request->PARENTID;
        $v->save();
        return responseToJson(Response::HTTP_CREATED, '新增成功');
    }

    //
    public function View(Request $request)
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
}
