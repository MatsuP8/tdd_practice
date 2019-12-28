<?php


namespace App\MoneyExample;


abstract class Money
{
    /** @var int $amount */
    protected $amount;

    /**
     * @param int $multiplier
     * @return Money
     */
    abstract function times(int $multiplier): Money;

    /**
     * @param Money $money
     * @return bool
     */
    public function equals(Money $money): bool
    {
        if (!($this instanceof $money)) {
            return false;
        }
        return $this->amount === $money->amount;
    }

    /**
     * @param int $amount
     * @return Dollar
     */
    public static function dollar(int $amount): Dollar
    {
        return new Dollar($amount);
    }

    /**
     * @param int $amount
     * @return Franc
     */
    public static function franc(int $amount): Franc
    {
        return new Franc($amount);
    }
}