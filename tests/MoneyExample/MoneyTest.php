<?php


namespace Test\MoneyExample;


use App\MoneyExample\Bank;
use App\MoneyExample\Expression;
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

        $this->assertFalse(Money::franc(5)->equals(Money::dollar(5)));
    }

    public function testCurrency()
    {
        $this->assertEquals("USD", Money::dollar(1)->currency());
        $this->assertEquals("CHF", Money::franc(1)->currency());
    }

    public function testSimpleAddition()
    {
        $five = Money::dollar(5);

        /** @var Expression $sum */
        $sum = $five->plus($five);

        $bank = new Bank();
        $reduced = $bank->reduce($sum, "USD");

        $this->assertEquals(Money::dollar(10), $reduced);
    }
}