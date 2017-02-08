<title>WHILE DO</title>

<?php
	$a=1;
	while($a<=50)
	{
		echo $a;
		$a++;

		if($a%2==1)
		{
			echo " Adalah Bilangan Genap";
		}
		else
		{
			echo " Adalah Bilangan Ganjil";
		}
		echo "<br/>";
	}
?>