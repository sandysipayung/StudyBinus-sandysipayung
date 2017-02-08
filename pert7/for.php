<title>FOR</title>

<?php
	for($a=1;$a<=50;$a+=1)
	{
		if ($a%2==1)
		{
			echo $a." Bilangan Ini Ganjil"."<br/>";
		}	

		else if($a%2==0)
		{
			echo $a." Bilangan Ini Genap"."<br/>";
		} 
	}
?>