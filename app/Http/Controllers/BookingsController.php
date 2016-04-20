<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use DB;
use App\Booking;

class BookingsController extends Controller
{
    public function index(){
    	$data = Booking::all();
		return view('calendar.index', compact('data'));
	}
}
