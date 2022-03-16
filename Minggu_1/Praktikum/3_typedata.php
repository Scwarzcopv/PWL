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
					$nim = "A11.2020.80017";
					$nama = 'Galih Adi Firmansah';
					$umur = 20;
					$nilai = 100.00;
					$status = TRUE;
					echo "<tr class='text-nowrap'>  <th scope='row'> NIM  </th>	<td>:</td> <td>".$nim."</td> <tr>";
					echo "<tr class='text-nowrap'>  <th scope='row'> Nama </th> <td>:</td> <td>$nama   </td> <tr>";

					print "<tr class='text-nowrap'> <th scope='row'>Umur</th> <td>:</td> <td>". $umur; print "</td> <tr>";
					printf ("<tr class='text-nowrap'> <th scope='row'>Nilai</th> <td>:</td> <td>%.2f</td> <tr>", $nilai);
					if ($status)
						echo "<tr class='text-nowrap'> <th scope='row'>Status</th> <td>:</td> <td>Aktif</td> <tr>";
					else
						echo "<tr class='text-nowrap'> <th scope='row'>Status</th> <td>:</td> <td>Tidak Aktif</td> <tr>";
				?>
			<tbody>
		</table>
	</h1>
</body>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>

</html>