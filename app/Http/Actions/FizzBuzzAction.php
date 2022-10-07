<?php

namespace App\Http\Actions;

use Illuminate\Support\Collection;

class FizzBuzzAction
{
    public static function execute(Collection $collection): Collection
    {
        return $collection->map(function ($item) {
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
    }
}
