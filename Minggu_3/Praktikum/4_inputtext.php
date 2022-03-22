<!DOCTYPE html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

    <title>Week3.4 • Pengolahan Form ~ Text</title>
    <link rel="shortcut icon" type="image/x-icon" href="https://avatars.githubusercontent.com/u/92729204?v=4">
</head>
<body>
	<div class="text-start translate-middle position-absolute top-50 start-50 text-nowrap">
		<form ACTION="5_prosestext.php" METHOD="POST" NAME="input" class="p-2 p-lg-5 bg-light rounded shadow-lg">
			<h1 class="text-center fw-bolder pb-3 pb-lg-4">NAMA ANGGOTA</h1>
			<div class="form-floating pb-2 pb-lg-3">
				<input type="text" class="form-control me-2 me-lg-3 rounded fw-bold text-uppercase" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-lg" placeholder="Nama Anggota - 2" name="nama1" required oninvalid="this.setCustomValidity('Isi dengan ＂ - ＂ bila kosong')"oninput="setCustomValidity('')">
				<label for="floatingInput" class="text-secondary fw-normal h5">Nama Anggota - 1</label>
			</div>
			<div class="form-floating pb-2 pb-lg-3">
				<input type="text" class="form-control me-2 me-lg-3 rounded fw-bold text-uppercase" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-lg" placeholder="Nama Anggota - 2" name="nama2" required oninvalid="this.setCustomValidity('Isi dengan ＂ - ＂ bila kosong')"oninput="setCustomValidity('')">
				<label for="floatingInput" class="text-secondary fw-normal h5">Nama Anggota - 2</label>
			</div>
			<div class="form-floating pb-2 pb-lg-3">
				<input type="text" class="form-control me-2 me-lg-3 rounded fw-bold text-uppercase" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-lg" placeholder="Nama Anggota - 3" name="nama3" required oninvalid="this.setCustomValidity('Isi dengan ＂ - ＂ bila kosong')"oninput="setCustomValidity('')">
				<label for="floatingInput" class="text-secondary fw-normal h5">Nama Anggota - 3</label>
			</div>
			<div class="form-floating pb-2 pb-lg-3">
				<input type="text" class="form-control me-2 me-lg-3 rounded fw-bold text-uppercase" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-lg" placeholder="Nama Anggota - 4" name="nama4" required oninvalid="this.setCustomValidity('Isi dengan ＂ - ＂ bila kosong')"oninput="setCustomValidity('')">
				<label for="floatingInput" class="text-secondary fw-normal h5">Nama Anggota - 4</label>
			</div>
			<div class="d-grid gap-2">
				<input class="btn btn-success rounded-3 mt-3 mt-lg-4 btn-lg" type="submit" name="Input" value="Input">
			</div>
			<caption>Isi dengan "-" bila kosong</caption>
		</form>
	</div>
</body>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>
</html>