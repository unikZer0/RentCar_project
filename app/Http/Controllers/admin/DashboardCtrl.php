<?php

namespace App\Http\Controllers\admin;
use Illuminate\Support\Facades\Gate;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class DashboardCtrl extends Controller
{
    public function index(){
        return view('admin.dashboard');
    }
}
