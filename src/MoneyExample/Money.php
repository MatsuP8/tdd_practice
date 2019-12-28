<?php


namespace App\MoneyExample;


class Money
{
    /** @var int $amount */
    protected $amount;

    /**
     * @param Money $money
     * @return bool
     */
    public function equals(Money $money): bool
    {
        return $this->amount === $money->amount;
    }
}