<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TourDatesController extends Controller
{
    public function index(){
    	return view('tourDates.main');
    }
}
