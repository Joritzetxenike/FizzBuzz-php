<?php
namespace Deg540\CleanCodeKata9\Test;

use  PHPUnit\Framework\TestCase;

class FizzBuzzTests extends TestCase
{
    public function given3ReturnsFizz():void
    {
        $fizzBuzz = new FizzBuzzKata();

        $fizzBuzz->convert();
    }
}
