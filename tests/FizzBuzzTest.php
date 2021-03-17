<?php

namespace Kate\Tests;

use Kata\FizzBuzz;
use PHPUnit\Framework\TestCase;

class FizzBuzzTest extends TestCase
{
    /**
     * @test
     */
    public function FizzBuzzShouldReturn1On1()
    {
        $subject = new FizzBuzz();

        self::assertEquals('1', $subject->write(1));
    }

    /**
     * @test
     */
    public function FizzBuzzShouldReturn2On2()
    {
        $subject = new FizzBuzz();

        self::assertEquals('2', $subject->write(2));
    }
}