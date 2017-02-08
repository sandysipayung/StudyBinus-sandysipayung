<?php

	$as=120;
	
	if ($as>=100)
	{
		echo "Angka Diluar Batasan Bro";
	}
	else if ($as<=0)
	{
		echo "Angka Diluar Batasan Sis";
	}
	else if ($as>=90 && $as<=100)
	{
		echo "GRADE A";
	}
	else if ($as>=80 && $as<=89)
	{
		echo "GRADE B";
	}
	else if ($as>=70 && $as<=79)
	{
		echo "GRADE C";
	}
	else if ($as>=60 && $as<=69)
	{
		echo "GRADE D";
	}
	else if ($as>=0 && $as<=59)
	{
		echo "FAIL";
	}

?>