<?php

namespace Deg540\CleanCodeKata9\src;

class FizzBuzz
{
    function convert(int $value): int | string
    {
        if($this->isFizzBuzz($value))
            return 'FizzBuzz';

        if($this->isBuzz($value))
            return 'Buzz';

        if($this->isFizz($value))
            return 'Fizz';

        return $value;
    }

    private function isFizz(int $value): bool
    {
        return $value % 3 === 0;
    }

    private function isBuzz(int $value): bool
    {
        return $value % 5 === 0;
    }

    private function isFizzBuzz(int $value): bool
    {
        return $this->isFizz($value) && $this->isBuzz($value);
    }
}