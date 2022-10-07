<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FizzBuzzController extends Controller
{
    public function index()
    {
        $list = [];

        return view('welcome');
    }
}
