<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Fungsi Aritmatika</title>
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
</head>
<body>
	<div class="container">
		<h2 class="mt-5 mb-3">Fungsi Aritmatika</h2>
		<form method="post" class="form-group">
			<div class="row">
				<div class="col-md-3 form-group">
					<label class="font-weight-bold">Bilangan 1</label>
					<input type="number" name="bilangan1" class="form-control" placeholder="Masukkan Bilangan 1" >
				</div>
				<div class="col-md-3 form-group">
					<label class="font-weight-bold">Bilangan 2</label>
					<input type="number" name="bilangan2" class="form-control" placeholder="Masukkan Bilangan 2">
				</div>
			</div>
			<div class="row">
				<div class="col-md-6 form-group">	
					<select class="form-control form-control-sm" name="perhitungan">
						<option value="penjumlahan">Penjumlahan</option>
						<option value="pengurangan">Pengurangan</option>
						<option value="perkalian">Perkalian</option>
						<option value="pembagian">Pembagian</option>
					</select>
				</div>
			</div>
			<div class="row">
				<div class="col-md-6 form-group">
					<button name="hitung" class="btn btn-primary btn-block">Hitung</button>
				</div>
			</div>
		</form>
		<?php
		
		if (isset($_POST['hitung'])) {
			error_reporting(0);
			$bilangan1 = $_POST['bilangan1'];
			$bilangan2 = $_POST['bilangan2'];
			$perhitungan = $_POST['perhitungan'];

			function artimatika($bilangan1, $bilangan2){
				global $bilangan1, $bilangan2, $perhitungan;

				if ($perhitungan == 'penjumlahan') {
					$hasil = $bilangan1 + $bilangan2;
					$ekspresi = '+';
				} elseif ($perhitungan == 'pengurangan') {
					$hasil = $bilangan1 - $bilangan2;
					$ekspresi = '-';
				} elseif ($perhitungan == 'perkalian') {
					$hasil = $bilangan1 * $bilangan2;
					$ekspresi = '*';
				} else {
					$hasil = $bilangan1 / $bilangan2;
					$ekspresi = '/';
				}

				if (is_nan($hasil)) {
					echo '<p class="mt-3">Masukkan bilangan terlebih dahulu</p>';
				} else {
					echo '<p class="mt-3 text-capitalize">Bilangan 1 = <strong>'.$bilangan1.'</strong></p>';
					echo '<p class="mt-3 text-capitalize">Bilangan 2 = <strong>'.$bilangan2.'</strong></p>';
					echo '<p class="mt-3 text-capitalize">Operasi = <strong>'.$perhitungan.'</strong></p>';
					echo '<p class="mt-3">Ekspresi Matematis = <strong>'.$bilangan1.' '.$ekspresi.' '.$bilangan2.'</strong></p>';
					echo '<p class="mt-3">Hasil perhitungan = <strong>'.$hasil.'</strong></p>';
				}
			}
			artimatika($bilangan1, $bilangan2);
		}
		?>
	</div>

    </body>
</html>