<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\tbl_cars_types;

class CarCtrl extends Controller
{
    public function viewcar()
    {
        $carTypes = tbl_cars_types::all();
        return view('admin.viewcar', compact('carTypes'));
    }
}
