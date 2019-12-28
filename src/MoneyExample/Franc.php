<?php


namespace App\MoneyExample;


class Franc extends Money
{
    /**
     * Franc constructor.
     * @param int $amount
     */
    public function __construct(int $amount)
    {
        $this->amount = $amount;
    }

    /**
     * @param int $multiplier
     * @return self
     */
    public function times(int $multiplier): self
    {
        return new Franc($this->amount * $multiplier);
    }
}