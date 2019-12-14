<?php


namespace Test\MoneyExample;


use App\MoneyExample\Dollar;
use PHPUnit\Framework\TestCase;

class MoneyTest extends TestCase
{
    public function testMultiplication()
    {
        $dollar = new Dollar(5);
        $dollar->times(2);

        $this->assertSame(10, $dollar->amount);
    }
}