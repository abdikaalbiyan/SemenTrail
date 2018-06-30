<!DOCTYPE html>
<html>
<head>
	<title>Pendaftaran</title>
	<meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
   	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.0/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.0/js/bootstrap.min.js"></script>

    <style>
  	body{
  		margin-top: 150px;
  		position: relative;
  	}
  	.navbar{
  		padding-left: 50px;
  		padding-right: 50px;
  	}
  	.icon{
  		width: 4%;
  		height: 4%;
  	}
  	.huruf_besar{
  		font-size: 150%;
  	}
  	.tengah_aja{
  		text-align: center;
  	}
  	.tengah{
  		/*text-align: center;
		vertical-align: middle;*/
		display: flex;
		justify-content: center;
		flex-direction: column;
		height: 150px;
  	}
  	.merah{
  		background-color: #E62129;
  		color: white;
  	}
  	.abu-abu{
  		background-color: #C9CACA;
  	}
  	hr{
  		margin-top: 40px;
  		margin-bottom: 40px
  	}
  	.gambar_kecil{
  		width: 100%;
  		margin-bottom: 10px;
  	}
  	.gambar_footer{
		width: 50%;
		height: 50%;
		margin-top: 30px;
	}
	.footerr{
		background-color: #E62129;
		color: white;
		padding-left: 20px;
		padding-right: 20px;
	}
  	</style>

</head>
<body>

	<nav class="navbar navbar-expand-sm bg-light navbar-light fixed-top">
	  <!-- <a class="navbar-brand" href="#">Logo</a> -->
    <img src="image/Logo Event.png" alt="Logo" width="270" height="60">
	  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#collapsibleNavbar">
	    <span class="navbar-toggler-icon"></span>
	  </button>
	  <div class="collapse navbar-collapse" id="collapsibleNavbar">
	    <ul class="navbar-nav mr-auto"></ul>
	    <ul class="navbar-nav">
	      <li class="nav-item">
	        <a class="nav-link" href="index.php">Beranda</a>
	      </li>
	      <li class="nav-item dropdown">
		    <a class="nav-link dropdown-toggle" href="#" id="navbardrop" data-toggle="dropdown">
		      Informasi Lomba
		    </a>
		    <div class="dropdown-menu" id="myNavbar">
		      <a class="dropdown-item" href="#section1">Tempat dan Tanggal</a>
		      <a class="dropdown-item" href="#section2">Kategori Lomba</a>
		      <a class="dropdown-item" href="#section3">Paket Lomba</a>
		      <a class="dropdown-item" href="#section4">Pengambilan Paket Lomba</a>
		      <a class="dropdown-item" href="#section5">Rute Lomba</a>
		      <a class="dropdown-item" href="#section6">Hadiah Juara</a>
		      <a class="dropdown-item" href="#section6">Peraturan dan Regulasi</a>
		    </div>
	      </li>
	      <li class="nav-item">
	        <a class="nav-link" href="pendaftaran.php">Pendaftaran</a>
	      </li>
	      <li class="nav-item">
	        <a class="nav-link" href="tentang.php">Tentang Kami &nbsp &nbsp</a>
	      </li>
	    </ul>
	  </div>
		<img src="image/Logo Semen Indonesia.png" alt="Logo" width="80" height="75">
	</nav>

	<div class="container" style="margin-bottom:50px">
		<ul style="list-style-image: url('image/icon_kecil.png')">
			<li>
		  	<h4><b>PENDAFTARAN LOMBA</b></h4>
		  	<div class="row">
			  <div class="col-sm-6">
			  	<div class="row" style="padding: 10px;">
			  		<div class="col-sm-6 merah tengah tengah_aja"">
			  			<h1><b>21K</b></h1>
			  			<b>Biaya Pendaftaran</b>
			  			<b>IDR 200.000</b>
			  		</div>
			  		<div class="col-sm-6 abu-abu tengah">
			  			<b>KATEGORI TERBUKA</b>
			  			Pendaftaran berlaku untuk Warga Negara Indonesia dan Warga Negara Asing yang memiliki KITAS
			  		</div>
			  		<a href="" class="btn-block"><button type="button" class="btn btn-secondary btn-block" style="margin-top: 20px;">Daftar Sekarang</button></a>
			  	</div>
			  </div>
			  <div class="col-sm-6">
			  	<div class="row" style="padding: 10px;">
			  		<div class="col-sm-6 merah tengah tengah_aja">
			  			<h1><b>10K</b></h1>
			  			<b>Biaya Pendaftaran</b>
			  			<b>IDR 150.000</b>
			  		</div>
			  		<div class="col-sm-6 abu-abu tengah">
			  			<b>KATEGORI TERTUTUP</b>
			  			Pendaftaran berlaku hanya untuk Warga Negara Indonesia
			  		</div>
			  		<a href="" class="btn-block"><button type="button" class="btn btn-secondary btn-block" style="margin-top: 20px">Daftar Sekarang</button></a>
			  	</div>
			  </div>
			</div>
		  </li>
		  <hr>
		  <li>
		  	<h4><b>PERIODE PENDAFTARAN</b></h4>
		  	Pembukaan Pendaftaran akan dimulai pada 1 Agustus 2018 pukul 00.00 WIB
		  	<br><br>
		  	Penutupan Pendaftaran akan dilaksankan pada 28 Oktober 2018 pukul 00.00 atau pada saat kuota peserta telah tercapai.
		  </li>
		  <hr>
		  <li>
		  	<h4><b>PERIODE AWAL DAN HARGA KHUSUS</b></h4>
		  	Periode Awal Pendaftaran berlaku sebelum 1 Agustus 2018 pukul 00.00 WIB dengan jumlah tertentu. Dimana khusus untuk Pendaftaran Periode Awal akan mendapatkan diskon sebesar 20%.
		  </li>
		</ul>
	</div>

	<div>
		<img src="image/Footer1.png" class="gambar_footer">
	</div>

	<div class="footer-copyright py-3 footerr">
		© 2018 Copyright:
		<div style="float:right;">
			<img src="image/facebook.png"> <img src="image/instagram.png">
		</div>
    </div>

</body>
</html>