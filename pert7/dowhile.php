<title>DO WHILE</title>

<?php

	$a=1;
	do {
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
	while($a<=50)
	
?>