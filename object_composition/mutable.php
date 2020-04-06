<?php
class Bar {

	private $drink;

	public function setBrand(string $drink) : bar
	{
		$this ->drink = $drink;

		return $this;
	}

	public function getBrand(): string
	{
		return $this->drink;
	}
}

$bar = new Bar();
$bar->setBrand('vodka');
$bar->setBrand('visky');
$bar->setBrand('rum');
print_r($bar);
?>