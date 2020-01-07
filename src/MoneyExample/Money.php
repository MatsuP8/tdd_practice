<?php


namespace App\MoneyExample;


class Money
{
    /** @var int $amount */
    protected $amount;

    /** @var string $currency */
    protected $currency;


    /**
     * Money constructor.
     * @param int $amount
     * @param string $currency
     */
    public function __construct(int $amount, string $currency)
    {
        $this->amount = $amount;
        $this->currency = $currency;
    }

    /**
     * @param int $multiplier
     * @return Money
     */
    function times(int $multiplier): Money
    {
        return new Money($this->amount * $multiplier, $this->currency);
    }

    /**
     * @param Money $money
     * @return bool
     */
    public function equals(Money $money): bool
    {
        if ($this->currency !== $money->currency) {
            return false;
        }
        return $this->amount === $money->amount;
    }

    /**
     * @return string
     */
    public function currency(): string
    {
        return $this->currency;
    }

    /**
     * @param int $amount
     * @return Money
     */
    public static function dollar(int $amount): Money
    {
        return new Money($amount, 'USD');
    }

    /**
     * @param int $amount
     * @return Money
     */
    public static function franc(int $amount): Money
    {
        return new Money($amount, 'CHF');
    }
}