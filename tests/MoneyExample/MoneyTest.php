<?php


namespace Test\MoneyExample;


use App\MoneyExample\Franc;
use App\MoneyExample\Money;
use PHPUnit\Framework\TestCase;

class MoneyTest extends TestCase
{
    public function testMultiplication()
    {
        $dollar = Money::dollar(5);

        $this->assertTrue(Money::dollar(10)->equals($dollar->times(2)));

        $this->assertTrue(Money::dollar(15)->equals($dollar->times(3)));
    }

    public function testEquality()
    {
        $this->assertTrue(Money::dollar(5)->equals(Money::dollar(5)));

        $this->assertFalse(Money::dollar(5)->equals(Money::dollar(6)));

        $this->assertTrue(Money::franc(5)->equals(Money::franc(5)));

        $this->assertFalse(Money::franc(5)->equals(Money::franc(6)));

        $this->assertFalse(Money::franc(5)->equals(Money::dollar(5)));
    }

    public function testFrancMultiplication()
    {
        $franc = Money::franc(5);

        $this->assertTrue(Money::franc(10)->equals($franc->times(2)));

        $this->assertTrue(Money::franc(15)->equals($franc->times(3)));
    }

    public function testCurrency()
    {
        $this->assertEquals("USD", Money::dollar(1)->currency());
        $this->assertEquals("CHF", Money::franc(1)->currency());
    }

    public function testDifferentClassEquality()
    {
        $this->assertTrue((new Money(10, "CTF"))->equals(new Franc(10, "CTF")));
    }
}