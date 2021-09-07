<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ValidateController extends Controller
{
    public function __invoke()
    {
        return view('validations.index');
    }
}
