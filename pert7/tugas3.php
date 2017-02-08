
<head>
<title>TUGAS 3</title>
</head>

<body>
	<?php

		$mahasiswa=array(
						"budi"=>75,
						"mega"=>24,
						"rieka"=>63,
						"Santy"=>90,
						"brandon"=>87,
						"lili"=>68,
						);
			print_r($mahasiswa);

			echo "<br/> <br/>";	

		foreach ($mahasiswa as $nama => $nilai)  //LOOPING UNTUK ARRAY YANG INDEKS NYA TIDAK BERURUTAN.
		{
			echo ucfirst($nama)." Mendapat Nilai ";
			
			if ($nilai>=100)
			{
				echo "ERROR";
			}
			else if ($nilai>=90 && $nilai<=100)
			{
				echo "GRADE A";
			}
			else if ($nilai>=80 && $nilai<=89)
			{
				echo "GRADE B";
			}
			else if ($nilai>=70 && $nilai<=79)
			{
				echo "GRADE C";
			}
			else if ($nilai>=60 && $nilai<=69)
			{
				echo "GRADE D";
			}
			else if ($nilai>=0 && $nilai<=59)
			{
				echo "FAIL";
			}
			else
			{
				echo "ERROR";
			}

			echo "<br/>";
		}
	?>
</body>