<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ReportController extends Controller
{
    public function add()
    {
        return view('admin.report.create');
    }
    public function create(Request $request)
    {
        return view('admin.report.create');
    }
    public function edit()
    {
        return view('admin.report.edit');
    }

    public function update()
    {
        return redirect('admin/report/edit');
    }
    public function index()
    {
        return view('admin.report.index');
    }
    public function delete(Request $request)
    {
        $request->delete();
        return redirect('admin/report/');
    }
    
}
