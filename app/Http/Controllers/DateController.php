<?php

namespace App\Http\Controllers;

use Carbon\Carbon;

class DateController extends Controller
{
    public function date()
    {
        $date = Carbon::now();
        return view('date', compact('date'));
    }
}
