<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Report;

class ReportController extends Controller
{
    public function index()
    {
        $reports = Report::all();
        $data = ['reports'=> $reports];
        return view('admin.report.index', $data);
    }

    public function add()
    {
        Report::create($request->all());
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
    public function delete(Request $request)
    {
        $request->delete();
        return redirect('admin/report/');
    }
    
}
