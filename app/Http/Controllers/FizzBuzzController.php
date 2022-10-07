<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FizzBuzzController extends Controller
{
    public function index()
    {
        $collection = collect()->range(1, 100)->map(function ($item) {
            $value = null;

            if ($item%3 === 0) {
                $value = 'Fizz';
            }

            if ($item%7 === 0) {
                $value = $value.'Buzz';
            }

            if ($value === 'FizzBuzz') {
                return "Valor {$item} tem erro FizzBuzz";
            }

            if (empty($value)) {
                return $item;
            }

            return $value;
        });

        return view('welcome', compact('collection'));
    }
}
