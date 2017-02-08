<head>
<title>FUNCTION</title>
<?php
function hitung ($a,$b)
{
	$hasil=$a+$b;
	return $hasil;
}
?>
</head>

<body>
	<?php
		$nilai1=7;
		$nilai2=5;

		echo hitung($nilai1,$nilai2);
	?>
</body>