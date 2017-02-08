<head>
<title>ARRAY 2</title>
</head>

<body>
	<?php

		$mahasiswa=array(
						3=>"Ombon",
						4=>"Rafi",
						1=>"Sandy"
						);

		print_r($mahasiswa);

		echo "<br/><br/>";
		foreach ($mahasiswa as $index => $nilai)
		{
			echo "Index ".$index." isi nya ".$nilai;
			echo "<br/>";
		}
	?>
</body>