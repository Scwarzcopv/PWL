<!DOCTYPE html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

    <title>Week3.5 • Pengolahan Form ~ Text</title>
    <link rel="shortcut icon" type="image/x-icon" href="https://avatars.githubusercontent.com/u/92729204?v=4">
</head>
<body>
	<h1 class="text-start translate-middle position-absolute top-50 start-50 text-nowrap">
		<div class="text-center h2">
			<?php
				if (isset($_POST['Input'])) { 
					$nama1 = $_POST['nama1'];
					$nama2 = $_POST['nama2'];
					$nama3 = $_POST['nama3'];
					$nama4 = $_POST['nama4'];
					echo "
					<table class='table table-striped table-hover table-bordered border-dark'>
					  	<thead>
					    	<tr>
								<th scope='col'>No.</th>
								<th scope='col'><div class='px-5'>Nama</div></th>
					    	</tr>
					  	</thead>
					  	<tbody>
					    	<tr>
								<th scope='row'>1</th>
								<td class='text-capitalize'>$nama1</td>
					    	</tr>
					    <tr>
								<th scope='row'>2</th>
								<td class='text-capitalize'>$nama2</td>
					    </tr>
					    <tr>
								<th scope='row'>3</th>
								<td class='text-capitalize'>$nama3</td>
					    </tr>
					    <tr>
								<th scope='row'>4</th>
								<td class='text-capitalize'>$nama4</td>
					    </tr>
					  	</tbody>
					</table>
					";
				} else {
					echo "<i>== NoName ==</i>";
				}
			?>
		</div>
	</h1>
</body>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>

</html>