<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Actions\FizzBuzzAction;

class FizzBuzzController extends Controller
{
    public function index()
    {
        $collection = FizzBuzzAction::execute(collect()->range(1, 100));

        return view('welcome', compact('collection'));
    }
}
