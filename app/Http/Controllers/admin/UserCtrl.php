<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class UserCtrl extends Controller
{
    //use for manage customer in our web
    public function viewuser(){
        return view('admin.viewuser');
    }
}
