<!DOCTYPE html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
</head>
<body>
	<h1 class="text-start translate-middle position-absolute top-50 start-50">
		<table class="table table-borderless">
			<tbody>
				<?php
					$gaji = 1000000;
					$pajak = 0.1;
					$thp = $gaji - ($gaji*$pajak);
					echo "<tr class='text-nowrap'>  <th scope='row'>Gaji sebelum pajak</th> <td>=</td> <td>Rp ".number_format( $gaji, 2, ',', '.' )."</td> <tr>";
					echo "<tr class='text-nowrap'>  <th scope='row'>Gaji yang dibawa pulang</th> <td>=</td> <td> Rp ".number_format( $thp, 2, ',', '.' )."</td> <tr>";
				?>
			<tbody>
		</table>
	</h1>
</body>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>

</html>