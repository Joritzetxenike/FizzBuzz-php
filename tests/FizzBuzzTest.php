<?php
namespace Deg540\CleanCodeKata9\Test;

use Deg540\CleanCodeKata9\src\FizzBuzz;
use  PHPUnit\Framework\TestCase;

class FizzBuzzTest extends TestCase
{
    private fizzBuzz $fizzBuzz;
    protected function setUp():void
    {
        parent::setUp();

        $this->fizzBuzz = new FizzBuzz();
    }

    /**
     * @test
     *
     */
    public function notMultipleOfThreeOrFiveReturnsNumber(): void
    {
        $result = $this->fizzBuzz->convert(1);

        $this->assertEquals(1, $result);
    }
    /**
     * @test
     *
     */
    public function multipleOfThreeReturnsFizz(): void
    {
        $result = $this->fizzBuzz->convert(6);

        $this->assertEquals('Fizz', $result);
    }
    /**
     * @test
     *
     */
    public function multipleOfFiveReturnsBuzz()
    {
        $result = $this->fizzBuzz->convert(25);

        $this->assertEquals('Buzz', $result);
    }
    /**
     * @test
     *
     */
    public function multipleOfThreeAndFiveReturnsFizzBuzz(): void
    {
        $result = $this->fizzBuzz->convert(15);

        $this->assertEquals('FizzBuzz', $result);
    }




}
