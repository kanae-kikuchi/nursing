<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\User;

class UserController extends Controller
{
    /**
     * 一覧画面
     */
    public function index()
    {
        $users = User::all();
        $data = ['users' => $users];
        return view('admin.user.index', $data);
    }

    /**
     * 新規データ追加
     */
    public function add(Request $request)
    {
        User::create($request->all());
        return view('admin.user.create');
    }

    public function edit()
    {
        return view('admin.user.edit');
    }

    public function update()
    {
        return redirect('admin/user/edit');
    }
    public function create(Request $request)
    {
        return view('admin/user/create');
    }
}
