<?php


namespace App\MoneyExample;


class Dollar
{
    /** @var int $amount */
    private $amount;

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
     * @return $this
     */
    public function times(int $multiplier): self
    {
        return new Dollar($this->amount * $multiplier);
    }

    /**
     * @param Dollar $dollar
     * @return bool
     */
    public function equals(Dollar $dollar): bool
    {
        return $this->amount === $dollar->amount;
    }
}