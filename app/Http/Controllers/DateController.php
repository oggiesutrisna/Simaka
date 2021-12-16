<?php

namespace App\Http\Controllers;

use Carbon\Carbon;

class DateController extends Controller
{
    public function datetime()
    {
        Carbon::now();
    }
}
