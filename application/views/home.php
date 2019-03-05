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
			<h1>Data Properti</h1>
			<br>
			<button class="btn btn-primary mb-2">Tambah</button>
			<div class="table-responsive" style="">
			    <table class="table table-bordered">
			        <thead class="thead-dark">
			            <tr>
			                <th>ID</th>
			                <th>Tipe</th>
			                <th>ID Proyek</th>
			                <th>ID Subkategori</th>
			                <th>Alamat</th>
			                <th>ID Kelurahan</th>
			                <th>Deskripsi</th>
			                <th>Harga</th>
			                <th>Tersedia Sejak</th>
			                <th>Luas Bangunan</th>
			                <th>Luas Tanah</th>
			                <th>Jumlah Kamar Mandi</th>
			                <th>Jumlah Kamar Tidur</th>
			                <th>Watt</th>
			                <th>Status</th>
			                <th>Latitude</th>
                			<th>Longitude</th>
            			</tr>
        			</thead>
        			<tbody>
            
        			</tbody>
    			</table>
			</div>
		</div>
	</body>
</html>