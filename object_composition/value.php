<?php

class Money {
	
	 private $value;

	    private $currency;

	    public function setCurrency(int $value, string $currency='USD')
	    {

	    $this->value = $value;
        $this->currency = $currency;
    }

    public function equals(Money $money): bool
    {
         return $this->value === $money->value
            && $this->currency === $money->currency;	
    }

   public function getValue(): int
    {
        return $this->value;
    }

    public function getCurrency(): string
    {
        return $this->currency;
    } 

}

$money = new Money();
$money->setCurrency('1');
$money->setCurrency('2');
print_r($money);
?>