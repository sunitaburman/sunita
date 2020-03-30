<?php
interface product{
	public function mobile();
}
interface product1 {
	public function laptop();
}
interface product2 {
	public function ipad();
}
class shopping implements product, product1,product2
{
	public function mobile()
	{
		echo "mobile is purchased";
		echo "<br>";
	}
		public function laptop()
		{
			echo "laptop is not purchased";
			echo "<br>";
		}
			public function ipad()
			{
				echo "ipad is in progress";
				echo "<br>";
			}
}
			$shopping1 = new shopping();
			$shopping1->mobile();
			$shopping1->laptop();
			$shopping1->ipad();
?>