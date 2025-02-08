<?php

namespace App\Http\Controllers\manager;

use App\Models\Booking;
use App\Models\Order;
use App\Models\Cus;
use App\Models\tbl_cars;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class UserCtrl extends Controller
{
    public function vieworder()
{
    $userID = auth()->user()->user_id;
    $cars = tbl_cars::where('user_id', $userID)->get();
    $bookingdata = Booking::with('customer:cus_id,first_name,last_name,phone_number,email', 'car:car_id,car_name')
                          ->whereIn('car_id', $cars->pluck('car_id'))
                          ->get();
    
    // related with others tb 
    $orderdata = Order::with('booking.customer', 'booking.car')
                      ->whereIn('book_id', $bookingdata->pluck('book_id'))  
                      ->orderBy('book_id')
                      ->get();
    
    return view('manager.vieworder', compact('orderdata'));
}

}
