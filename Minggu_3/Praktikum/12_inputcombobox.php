<!DOCTYPE html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

    <title>Week3.12 • Film Kartun Favorit ~ Inputan Combobox</title>
    <link rel="shortcut icon" type="image/x-icon" href="https://avatars.githubusercontent.com/u/92729204?v=4">
</head>
<body>
	<div class="text-start translate-middle position-absolute top-50 start-50 text-nowrap">
		<form ACTION="13_prosescombobox.php" METHOD="POST" NAME="input" class="p-2 p-lg-5 bg-light rounded shadow-lg">
			<h1 class="text-center fw-bolder pb-3 pb-lg-4">Pilih Film Kartun Favorit Anda :</h1>
			<div class="input-group input-group-lg mt-2 mt-lg-3">
				<select class="form-select form-select-lg rounded me-3 me-lg-4" aria-label=".form-select-lg example" name="kartun" required oninvalid="this.setCustomValidity('Pilih Salah Satu!')"oninput="setCustomValidity('')">
					<option selected value="">== PILIH SALAH SATU==</option>
					<option value="Sponge Bob">Sponge Bob</option>
					<option value="Sinchan">Sinchan</option>
					<option value="Conan">Conan</option>
					<option value="Doraemon">Doraemon</option>
					<option value="Dragon Ball">Dragon Ball</option>
					<option value="Naruto">Naruto</option>
				</select>
				<input class="btn btn-success rounded-3 btn-lg fw-bolder px-3 px-lg-4" type="submit" name="Pilih" value="PILIH">
			</div>
		</form>
	</div>
</body>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>

</html>