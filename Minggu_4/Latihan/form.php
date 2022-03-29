<!DOCTYPE html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

    <title>Week4.L • FORM</title>
    <link rel="shortcut icon" type="image/x-icon" href="https://avatars.githubusercontent.com/u/92729204?v=4">
</head>
<body>
	<div class="text-start translate-middle position-absolute top-50 start-50 text-nowrap container">
		<form ACTION="formproses.php" METHOD="POST" NAME="input" class="p-2 p-lg-5 bg-light rounded shadow-lg col-lg-7 mx-auto">
			<div class="row mb-lg-2 h4 d-flex align-items-center">
				<label for="inputEmail3" class="col-lg-4 col-form-label">
					<table class="w-100">
						<tr>
							<td>NIM</td>
							<td class="text-end">:</td>
						</tr>
					</table>
				</label>
				<div class="col-lg-8 ps-0">
					<input type="text" class="form-control" required oninvalid="this.setCustomValidity('NIM belum terisi!')"oninput="setCustomValidity('')" name="NIM">
				</div>
			</div>
			<div class="row mb-lg-2 h4 d-flex align-items-center">
				<label for="inputEmail3" class="col-lg-4 col-form-label">
					<table class="w-100">
						<tr>
							<td>Program Studi</td>
							<td class="text-end">:</td>
						</tr>
					</table>
				</label>
				<div class="col-lg-6 ps-0">
					<select class="form-select rounded" name="Prodi" required oninvalid="this.setCustomValidity('Pilih Salah Satu!')"oninput="setCustomValidity('')">
						<option selected value="">== PILIH SALAH SATU==</option>
						<option value="[A11] Teknik Informatika S1">[A11]&emsp;Teknik Informatika S1</option>
						<option value="[A12] Sistem Informasi S1">[A12]&emsp;Sistem Informasi S1</option>
						<option value="[A22] Teknik Informatika D3">[A22]&emsp;Teknik Informatika D3</option>
					</select>
				</div>
			</div>
			<div class="row mb-lg-2 h4 d-flex align-items-center">
				<label for="inputEmail3" class="col-lg-4 col-form-label">
					<table class="w-100">
						<tr>
							<td>Nilai Tugas</td>
							<td class="text-end">:</td>
						</tr>
					</table>
				</label>
				<div class="col-lg-8 ps-0">
					<input type="number" step=any class="form-control" min="0" max="100" placeholder="Nilai 0 - 100" required oninvalid="this.setCustomValidity('Input nilai min:0 max:100!')"oninput="setCustomValidity('')" name="Tugas">
				</div>
			</div>
			<div class="row mb-lg-2 h4 d-flex align-items-center">
				<label for="inputEmail3" class="col-lg-4 col-form-label">
					<table class="w-100">
						<tr>
							<td>Nilai UTS</td>
							<td class="text-end">:</td>
						</tr>
					</table>
				</label>
				<div class="col-lg-8 ps-0">
					<input type="number" step=any class="form-control" min="0" max="100" placeholder="Nilai 0 - 100" required oninvalid="this.setCustomValidity('Input nilai min:0 max:100!')"oninput="setCustomValidity('')" name="UTS">
				</div>
			</div>
			<div class="row mb-lg-2 h4 d-flex align-items-center">
				<label for="inputEmail3" class="col-lg-4 col-form-label">
					<table class="w-100">
						<tr>
							<td>Nilai UAS</td>
							<td class="text-end">:</td>
						</tr>
					</table>
				</label>
				<div class="col-lg-8 ps-0">
					<input type="number" step=any class="form-control" min="0" max="100" placeholder="Nilai 0 - 100" required oninvalid="this.setCustomValidity('Input nilai min:0 max:100!')"oninput="setCustomValidity('')" name="UAS">
				</div>
			</div>
			<div class="row mb-lg-2 h4 d-flex align-items-start">
				<label for="inputEmail3" class="col-lg-4 col-form-label">
					<table class="w-100">
						<tr>
							<td>Catatan Khusus</td>
							<td class="text-end">:</td>
						</tr>
					</table>
				</label>
				<div class="col-lg-8 pt-lg-2">
					<?php  
						session_start();
						$arr_catatan = array(
						 	"Catatan1" => "Kehadiran >= 70 %",
						 	"Catatan2" => "Interaktif di kelas",
						 	"Catatan3" => "Tidak terlambat mengumpulkan tugas",
						);
						$_SESSION['arr_catatan'] = $arr_catatan;
						foreach ($arr_catatan as $cttn => $ket) { 
							echo "
							<div class='form-check lh-base h4'>
								<input class='form-check-input' type='checkbox' name='$cttn' value='$ket'>
								<label class='form-check-label' for='flexCheckDefault'>$ket</label>
							</div>
							"; 
						}
					?>
				</div>
			</div>
			<div class="row">
				<div class="col-lg-6">
					<input class="btn btn-danger rounded-3 mt-3 mt-lg-4 me-1 btn-lg col-12" type="reset" name="Reset" value="Reset">
				</div>
				<div class="col-lg-6">
					<input class="btn btn-success rounded-3 mt-3 mt-lg-4 ms-1 btn-lg col-12" type="submit" name="Simpan" value="Simpan">
				</div>
			</div>
		</form>
	</div>
</body>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>

</html>