<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ValidateController extends Controller
{
    public function submitRequest()
    {
        return view('validations.validate');
    }
}
