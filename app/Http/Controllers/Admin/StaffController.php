<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class StaffController extends Controller
{
    public function add()
    {
        return view('admin.staff.create');
    }
    public function create(Request $request)
    {
        return view('admin.staff.create');
    }
    public function edit()
    {
        return view('admin.staff.edit');
    }
    
    public function update()
    {
        return redirect('admin/staff/edit');
    }
    public function index()
    {
        return view('admin.staff.index');
    }
}
