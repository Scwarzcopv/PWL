<!DOCTYPE html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

    <title>Week4.17 • String 07</title>
    <link rel="shortcut icon" type="image/x-icon" href="https://avatars.githubusercontent.com/u/92729204?v=4">
</head>
<body>
	<h1 class="text-start translate-middle position-absolute top-50 start-50 text-nowrap">
	<?php 
		$number = 1234.56; 
		// english notation (default) 
		$english_format_number = number_format($number); 
		echo "<br>".$english_format_number; // 1,235 
		// French notation 
		$nombre_format_francais = number_format($number, 2, ',', ' '); 
		echo "<br>".$nombre_format_francais; // 1 234,56 
		//indonesian notation 
		$format_indonesia = number_format ($number, 2, ',', '.'); 
		echo "<br>".$format_indonesia; //1.234,56 
		$number = 1234.5678; 
		// english notation without thousands seperator 
		$english_format_number = number_format($number, 2, '.', ''); 
		echo "<br>". $english_format_number; // 1234.57
	?>
	</h1>
</body>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>

</html>