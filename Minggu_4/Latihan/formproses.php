<!DOCTYPE html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

    <title>Week4.L • FORM-PROCESS</title>
    <link rel="shortcut icon" type="image/x-icon" href="https://avatars.githubusercontent.com/u/92729204?v=4">
    <style type="text/css">
    	.customtable>tbody>tr>td, .customtable>tbody>tr>th, .customtable>thead>tr>td, .customtable>thead>tr>th {padding: 10px 25px;}
    </style>
</head>
<body>
	<div class="text-start translate-middle position-absolute top-50 start-50 text-nowrap h4">
		<?php
			if (isset($_POST['Simpan'])) { 
				//NIM
				$NIM = $_POST['NIM'];
				//Prodi
				$Prodi = $_POST['Prodi'];
				//Nilai
				$Tugas = $_POST['Tugas'];
				$UTS = $_POST['UTS'];
				$UAS = $_POST['UAS'];
				//Hasil
				$nilai = 0;
				$varnilai = '';
				$kelulusan = '';
				
				//Hitung Nilai Akhir
				$nilai = ($Tugas*(40/100))+($UTS*(30/100))+($UAS*(30/100));
				//Hitung Variael Nilai
				if ($nilai > 84) {
					$varnilai = 'A';
				}
				elseif ($nilai > 69) {
					$varnilai = 'B';
				}
				elseif ($nilai > 59) {
					$varnilai = 'C';
				}
				elseif ($nilai > 50) {
					$varnilai = 'D';
				}
				else {$varnilai = 'E';}
				//Penentuan Kelulusan
				if ($nilai >= 60) {
					$kelulusan = 'LULUS';
				}
				else {$kelulusan = 'TIDAK LULUS';}
				//Echo
				echo "
					<table class='table table-dark table-striped table-hover shadow-lg customtable table-bordered border-light'>
						<thead>
							<tr>
								<th scope='col'>Program Studi</th>
								<th scope='col'>NIM</th>
								<th scope='col'>Nilai Akhir</th>
								<th scope='col'>Status</th>
								<th scope='col'>Catatan Khusus</th>
							</tr>
						</thead>
						<tbody>
							<tr>
								<td>$Prodi</td>
								<td>$NIM</td>
								<td>$nilai</td>
								<td>$kelulusan</td>
								<td>";
								//Catatan
								session_start();
								function InputCetak_Array () {
									//Input
									$arr_catatan = array();
									foreach ($_SESSION['arr_catatan'] as $cttn => $ket) {
										if (isset($_POST["$cttn"])) {
											$arr_catatan[] = "$ket";
										}
									}

									//Cetak
									if (count($arr_catatan)==0) {
										echo "-";
									}
									else {
										foreach ($arr_catatan as $catatan) {
											echo "• ".$catatan."<br>";
										}
									}
								}
								InputCetak_Array ();
								echo "
								</td>
							</tr>
						</tbody>
					</table>
				";
			} else {
				echo "<i>== NoData ==</i>";
			}
		?>
	</div>
</body>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>

</html>