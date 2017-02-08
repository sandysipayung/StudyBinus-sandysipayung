<head>
<title>ARRAY</title>
</head>

<body>
	<?php


		$buah=array("apel","mangga","pisang","jeruk","pete","jengkol");
		print_r ($buah);
		echo "<br/>";
		echo "<br/>";

		$jumlah_buah=count($buah)-1;
		for($i=0;$i<=$jumlah_buah;$i++)
		{
			echo $buah[$i];
			echo "<br/>";
		}
		

		$buah1=array("semangka","melon","pepaya");
		print_r ($buah1);
		echo "<br/>";
		echo "<br/>";
		
		$jumlah_buah1=count($buah1)-1;
		$i=0;
		while($i<=$jumlah_buah1)
		{
			echo $buah1[$i];
			echo "<br/>";
			$i++;
		}
				
	?>
</body>