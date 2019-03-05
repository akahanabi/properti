<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>
<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<title>CRUD</title>
		<link rel="stylesheet" href="<?php echo base_url('assets/css/bootstrap.min.css') ?>">
		<script type="text/javascript" src="<?php echo base_url('assets/js/bootstrap.min.js') ?>" charset="utf-8"></script>
	</head>
	<body>
		<nav class="navbar navbar-expand-sm bg-dark navbar-dark fixed-top">
  			<a class="navbar-brand" href="#"><?php echo SITE_NAME; ?></a>
  			<ul class="navbar-nav">
    			<li class="nav-item">
      				<a class="nav-link" href="#">Agen</a>
    			</li>
    			<li class="nav-item">
      				<a class="nav-link" href="#">Agensi</a>
				</li>
				<li class="nav-item">
      				<a class="nav-link" href="#">Properti</a>
    			</li>
  			</ul>
		</nav>
        <div class="container-fluid" style="margin-top:80px;width:80%">
            <h1>Tambah Data Properti</h1>
            <form action="" method=""style="margin-top:20px">
                <label style="width:50px;">Tipe</label>
                <div class="form-check-inline">
                    <label class="form-check-label">
                        <input type="radio" class="form-check-input" name="optradio">Sewa
                    </label>
                </div>
                <div class="form-check-inline">
                    <label class="form-check-label">
                        <input type="radio" class="form-check-input" name="optradio">Jual
                    </label>
                </div>
                <label>ID Proyek</label>
                <input class="form-control" type="text" name="id_proyek"required autocomplete="off">
                <label>Subkategori</label>
                <input class="form-control" type="text" name="id_subkategori" required autocomplete="off">
                <label>Alamat</label>
                <input class="form-control" type="text" name="alamat" required autocomplete="off">
                <label>ID Kelurahan</label>
                <input class="form-control" type="text" name="id_kelurahan" required autocomplete="off">
                <label>Deskripsi</label>
                <textarea class="form-control" rows="5"></textarea>
                <label>Harga</label>
                <input class="form-control" type="number" min="0" name="harga" required autocomplete="off">
                <label>Tersedia Sejak</label>
                <input class="form-control" type="number" min="0" name="tersedia_sejak" required autocomplete="off">
                <label>Luas Bangunan</label>
                <input class="form-control" type="number" min="0" name="luas_bangunan" autocomplete="off">
                <label>Luas Tanah</label>
                <input class="form-control" type="number" min="0" name="luas_tanah" required autocomplete="off">
                <label>Jumlah Kamar Mandi</label>
                <input class="form-control" type="number" min="0" name="jumlah_kamar_mandi" autocomplete="off">
                <label>Jumlah Kamar Tidur</label>
                <input class="form-control" type="number" min="0" name="jumlah_kamar_tidur" autocomplete="off">
                <label>Watt</label>
                <input class="form-control" type="number" min="0" name="watt" autocomplete="off">
                <label>Latitude</label>
                <input class="form-control" type="text" name="latitude" required autocomplete="off">
                <label>Longitude</label>
                <input class="form-control" type="text" name="longitude" required autocomplete="off">
                <br>
                <button type="submit" class="btn btn-primary mb-2">Tambah</button>
            </form>
        </div>
	</body>
</html>