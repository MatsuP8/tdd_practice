<?php


namespace App\MoneyExample;


class Dollar extends Money
{
    /**
     * Dollar constructor.
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
        return new Dollar($this->amount * $multiplier);
    }
}