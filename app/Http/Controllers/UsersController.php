<?php

namespace App\Http\Controllers;

use App\Handlers\ImageUploadHandler;
use App\Http\Requests\UserRequest;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\View\View;

class UsersController extends Controller {
    public function __construct() {
        // 使用 Laravel 提供身份验证（Auth）中间件来过滤未登录用户的 edit, update
        // except 方法来设定 指定动作 不使用 Auth 中间件进行过滤
        $this->middleware('auth', ['except' => ['show']]);
    }
    
    public function show(User $user) {
        return view('users.show', compact('user'));
    }
    
    public function edit(User $user) {
        // 使用 authorize 方法来检验用户是否授权
        // update 是指授权类里的 update 授权方法，$user 对应传参 update 授权方法的第二个参数
        $this->authorize('update', $user);
        return view('users.edit', compact('user'));
    }
    
    public function update(UserRequest $request, User $user, ImageUploadHandler $uploader) {
        // 调试方法
        // dd($request->avatar);
        $this->authorize('update', $user);
        $data = $request->all();
    
        if ($request->avatar) {
            $result = $uploader->save($request->avatar, 'avatars', $user->id, 362);
            if ($result) {
                $data['avatar'] = $result['path'];
            }
        }
    
        $user->update($data);
        return redirect()->route('users.show', $user->id)->with('success', '个人资料更新成功！');
    }
}
