<!DOCTYPE html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

    <style type="text/css">
    	.form-control:focus {
  			border-color: #fff;
  			box-shadow: inset 0 5px 5px rgba(255, 255, 255, 0.8), 0 0 9px rgba(255, 255, 255, 0.8);
		}
		.form-select:focus {
			border-color: #fff;
			box-shadow: inset 0 5px 5px rgba(255, 255, 255, 0.8), 0 0 9px rgba(255, 255, 255, 0.8);
		}
		.output {
			padding: 0.5rem 1rem;
  			font-size: 1.25rem;
			width: 100%;
		}
		.output:focus {
			border-color: #fff;
			box-shadow: inset 0 5px 5px rgba(255, 255, 255, 0.8), 0 0 9px rgba(255, 255, 255, 0.8);
		}
    </style>
</head>
<body class="bg-light">
	<?php 
	if(isset($_POST['hitung'])){
		$bil1 = $_POST['bil1'];
		$bil2 = $_POST['bil2'];
		$operasi = $_POST['operasi'];
		switch ($operasi) {
			case 'tambah':
				$hasil = $bil1+$bil2;
			break;
			case 'kurang':
				$hasil = $bil1-$bil2;
			break;
			case 'kali':
				$hasil = $bil1*$bil2;
			break;
			case 'bagi':
				$hasil = $bil1/$bil2;
			break;	
			case 'pilih':
				$hasil = "";
			break;		
		}
	}
	?>

	<div class="col-lg-4 text-center translate-middle position-absolute top-50 start-50 px-lg-5 bg-dark text-light rounded-3 py-lg-5 shadow">
		<h3>KALKULATOR SEDERHANA</h3>
		<form method="post" action="kalkulator_sederhana.php">	
			<div class="input-group pt-lg-5">
				<div class="input-group input-group-lg">
					<span class="input-group-text fw-bolder text-dark">Bil - 1</span>
					<input type="number" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-lg" placeholder="Input Bilangan Pertama" name="bil1">
				</div>
				<div class="input-group input-group-lg pt-2 pt-lg-3">
					<span class="input-group-text fw-bolder text-dark" >Bil - 2</span>
					<input type="number" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-lg" placeholder="Input Bilangan Kedua" name="bil2">
				</div>
				<div class="input-group input-group-lg pt-2 pt-lg-3">
					<select class="form-select rounded-3 me-2 me-lg-3" name="operasi">
						<option selected value="pilih">== PILIH ==</option>
						<option value="kali">Kali&ensp;(x)</option>
						<option value="bagi">Bagi&ensp;(:)</option>
						<option value="tambah">Tambah&ensp;(+)</option>
						<option value="kurang">Kurang&ensp;(-)</option>
					</select>
					<input class="btn btn-success rounded-3 px-5 ms-0" type="submit" name="hitung" value="Hitung">
				</div>
			</div>
		</form>
		<?php if(isset($_POST['hitung'])){ ?>
			<input type="text" value="<?php echo $hasil; ?>" class="form-control output rounded-3 mt-2 mt-lg-5 mb-lg-3 text-center" placeholder="~Output~" disabled>
		<?php }else{ ?>
			<input type="text" value="0" class="form-control output rounded-3 my-2 my-lg-3 text-center" placeholder="~Output~" disabled>
		<?php } ?>	
	</div>
</body>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>

</html>
