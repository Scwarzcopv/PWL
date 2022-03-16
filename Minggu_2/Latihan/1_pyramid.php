<!DOCTYPE html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

    <title>Week2.L1 • Task 1</title>
    <link rel="shortcut icon" type="image/x-icon" href="https://avatars.githubusercontent.com/u/92729204?v=4">
</head>
<body>
	<?php 
	if(isset($_POST['generate'])){
		$rows = $_POST['rows'];
	}
	?>
	<form method="post" action="1_pyramid.php" class="col-lg-4">
		<div class="input-group p-lg-2">
			<div class="input-group input-group-lg">
				<span class="input-group-text fw-bolder text-light bg-dark rounded-start">Rows :</span>
				<input type="number" class="form-control me-lg-3 rounded-end" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-lg" placeholder="Input Banyak Baris" name="rows">
				<input class="btn btn-success rounded-3 px-lg-3 ms-0" type="submit" name="generate" value="Generate">
			</div>
		</div>
	</form>
	<div class="h1 text-nowrap mx-lg-3 mt-lg-3">
		<?php 
			if(isset($_POST['generate'])){ 
				for ($num = 1; $num <= $rows; $num++) {
					for ($i = 1; $i <= $num; $i++) {
						echo "$num";
					}
					echo"<br>";
				}
			}
		?>
	</div>
</body>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>

</html>