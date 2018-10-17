<?php

namespace App\Http\Controllers\Admin;

use App\Models\Module;
use App\Http\Controllers\Controller;

class AdminController extends Controller
{
    public function __construct()
    {
        $this->middleware('admin');
    }

    //后台主页
    public function home(Module $module)
    {
        return view('admin.admin_home');
    }

    //系统管理
    public function index()
    {
        return view('admin.admin_index');
    }
}
