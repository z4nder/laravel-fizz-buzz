<?php

namespace Tests\Unit;

use PHPUnit\Framework\TestCase;
use App\Http\Actions\FizzBuzzAction;

class FizzBuzzActionTest extends TestCase
{
    public function test_fizz_buzz_generate_error()
    {
        $response = FizzBuzzAction::execute(collect([
            1, 3, 7, 21
        ]));

        $expected = collect([
            1, 'Fizz', 'Buzz', 'Valor 21 tem erro FizzBuzz'
        ]);

        $this->assertEquals($expected, $response);
    }
}
