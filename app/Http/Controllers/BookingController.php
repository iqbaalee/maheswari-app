<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class BookingController extends Controller
{
    public function index(Request $request)
    {
        /**
         * pages adalah nama folder
         * index adalah nama file
         */
             return view('pages.booking.index');
    }

    public function create(){

    }
}
