<!DOCTYPE html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

    <title>Week3.11 • CHECKBOX RESULT</title>
    <link rel="shortcut icon" type="image/x-icon" href="https://avatars.githubusercontent.com/u/92729204?v=4">
</head>
<body>
	<h1 class="text-start translate-middle position-absolute top-50 start-50 text-nowrap">
		<?php
			if (isset($_POST['Pilih'])) {
				echo "<b>Band Favorit Anda adalah :</b><br>";
				if (isset($_POST['band01'])) {
					echo "• " . $_POST['band01'] . "<br>";
				}
				if (isset($_POST['band02'])) {
					echo "• " . $_POST['band02'] . "<br>";
				}
				if (isset($_POST['band03'])) {
					echo "• " . $_POST['band03'] . "<br>";
				}
				if (isset($_POST['band04'])) {
					echo "• " . $_POST['band04'] . "<br>";
				}
				if (!isset($_POST['band01']) && !isset($_POST['band02']) && !isset($_POST['band03']) && !isset($_POST['band04'])) {
					echo "<div class='text-center'> == Nothing == </div>";
				}
			}
		?>
	</h1>
</body>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>

</html>