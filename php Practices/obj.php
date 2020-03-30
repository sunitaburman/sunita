<?php 
final class Currency
{
	private $currency;
	public function
	__construct(string $currency)
	{
		$currency = strtoupper($currency);
		if(strlen($currency)!== 3 || !ctype_alpha($currency)){
			throw new InvalidArgumentsException("currency has to consist of three letters");
		}
		$this->currency = $currency;
	}
}
$C1 = new Currency('1234');
?>