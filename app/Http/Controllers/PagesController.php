<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{
    public function root()
    {
        $snews = \DB::table('snews')->orderBy('release_date', 'desc')->limit(3)->get();
        return view('pages.root', compact('snews'));
    }
    
    public function permissionDenied()
    {
        // 如果当前用户有权限访问后台，直接跳转访问
        if (config('administrator.permission')()) {
            return redirect(url(config('administrator.uri')), 302);
        }
        // 否则使用视图
        return view('pages.permission_denied');
    }
    
    public function about()
    {
        return view('pages.about');
    }
}
