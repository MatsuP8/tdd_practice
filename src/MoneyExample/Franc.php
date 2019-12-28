<?php


namespace App\MoneyExample;


class Franc
{
    /** @var int $amount */
    private $amount;

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

    /**
     * @param Franc $franc
     * @return bool
     */
    public function equals(Franc $franc): bool
    {
        return $this->amount === $franc->amount;
    }
}