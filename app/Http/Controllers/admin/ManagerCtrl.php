<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ManagerCtrl extends Controller
{
    //use for manage manager in our web
    public function viewmanager(){
        return view('admin.viewmanager');
    }
}
