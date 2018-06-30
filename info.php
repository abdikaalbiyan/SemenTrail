<!DOCTYPE html>
<html>
<head>
	<title>Semen Trail</title>
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
<body data-spy="scroll" data-offset="20">
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
	        <a class="nav-link" href="#">Pendaftaran</a>
	      </li>
	      <li class="nav-item">
	        <a class="nav-link" href="#">Tentang Kami &nbsp &nbsp</a>
	      </li>
	    </ul>
	  </div>
		<img src="image/Logo Semen Indonesia.png" alt="Logo" width="80" height="75">
	</nav>

	  <div class="container" style="margin-bottom:50px">
	  	<ul style="list-style-image: url('image/icon_kecil.png')">
		  <li id="section1">
		  	<h4><b>TEMPAT DAN TANGGAL</b></h4>
		  	Lomba lari Semen Indonesia Trail Run 2018 akan dilaksanakan pada :<br>
		  	<b>Minggu, 4 November 2018</b><br>
		  	<b>Pabrik Gresik, Semen Indonesia</b><br>
		  	Start kategori <b>21K</b> pukul 06.00 WIB<br>
		  	Start kategori <b>10K</b> pukul 06.15 WIB<br>
		  </li>
		  <hr>
		  <li id="section2">
		  	<h4><b>KATEGORI LOMBA</b></h4>
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
			  	</div>
			  </div>
			</div>
		  </li>
		  <hr>
		  <li id="section3">
		  	<h4><b>PAKET LOMBA</b></h4>
		  	<div class="row" style="padding-top: 20px; padding-bottom: 20px">
		  		<div class="col-sm-2 tengah_aja">
		  			<img src="image/RPC1.png" class="gambar_kecil">
		  			KAOS LOMBA
		  		</div>
		  		<div class="col-sm-2 tengah_aja">
		  			<img src="image/RPC2.png" class="gambar_kecil">
		  			NOMOR BIB
		  		</div>
		  		<div class="col-sm-2 tengah_aja">
		  			<img src="image/RPC3.png" class="gambar_kecil">
		  			TAS
		  		</div>
		  		<div class="col-sm-2 tengah_aja">
		  			<img src="image/RPC4.png" class="gambar_kecil">
		  			MEDALI PENAMAT
		  		</div>
		  		<div class="col-sm-2 tengah_aja">
		  			<img src="image/RPC5.png" class="gambar_kecil">
		  			KAOS PENAMAT <i>Khusus 21K</i>
		  		</div>
		  		<div class="col-sm-2 tengah_aja">
		  			MINUM DAN MAKAN
		  		</div>
		  	</div>
		  </li>
		  <hr>
		  <li id="section4">
		  	<h4><b>PENGAMBILAN PAKET LOMBA</b></h4>
		  	Pengambilan paket loma Semen Indonesia Trail Run 2018 akan dilaksanakan pada :<br>
		  	<b>Jumat, 2 November 2018 pukul 14.00 - 20.00 WIB</b><br>
		  	<b>Hotel Pessona Gresik</b><br>
		  	<b>Sabtu, 3 November 2018 pukul 10.00 - 17.00 WIB</b><br>
		  	<b>Hotel Pessona Gresik</b><br>
		  </li>
		  <hr>
		  <li id="section5">
		  	<h4><b>RUTE LOMBA</b></h4>
		  	Rute lomba lari Semen Indonesia Trail Run 2018 akan melewati kawasan pasca tambang yang meliputi kawasan bebatuan, bukit kapur, tanah yang menampilkan pemandangan dan pengalaman berlari yang berbeda.
		  </li>
		  <hr>
		  <li id="section6">
		  	<h4><b>HADIAH JUARA</b></h4>
		  	<div class="row" style="padding-top: 20px; padding-bottom: 20px">
		  		<div class="col-sm-6">
		  			<b>Kategori 21K Terbuka Pria dan Wanita masing-masing akan mendapatkan :</b><br>
		  			Juara 1 &nbsp;&nbsp; IDR 20.000.000<br>
		  			Juara 2 &nbsp;&nbsp; IDR 15.000.000<br>
		  			Juara 3 &nbsp;&nbsp; IDR 10.000.000<br>
		  			Juara 4 &nbsp;&nbsp; IDR 7.000.000<br>
		  			Juara 5 &nbsp;&nbsp; IDR 5.000.000<br>
		  		</div>
		  		<div class="col-sm-6">
		  			<b>Kategori 10K Tertutup Pria dan Wanita masing-masing akan mendapatkan :</b><br>
		  			Juara 1 &nbsp;&nbsp; IDR 10.000.000<br>
		  			Juara 2 &nbsp;&nbsp; IDR 7.500.000<br>
		  			Juara 3 &nbsp;&nbsp; IDR 5.000.000<br>
		  			Juara 4 &nbsp;&nbsp; IDR 3.000.000<br>
		  			Juara 5 &nbsp;&nbsp; IDR 2.000.000<br>
		  		</div>
		  	</div>
		  </li>
		  <hr>
		  <li id="section6">
		  	<h4><b>PERATURAN DAN REGULASI</b></h4>
		  	Untuk Peraturan dan Regulasi lomba lari Semen Indonesia Trail Run 2018, silhkan mengunduh lewat tautan dibawah ini :<br>
		  	<button type="button" class="btn btn-secondary">Unduh</button>
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

<script>
$(document).ready(function(){
  // Add scrollspy to <body>
  $('body').scrollspy({target: ".navbar", offset: 50});   

  // Add smooth scrolling on all links inside the navbar
  $("#myNavbar a").on('click', function(event) {
    // Make sure this.hash has a value before overriding default behavior
    if (this.hash !== "") {
      // Prevent default anchor click behavior
      event.preventDefault();

      // Store hash
      var hash = this.hash;

      // Using jQuery's animate() method to add smooth page scroll
      // The optional number (800) specifies the number of milliseconds it takes to scroll to the specified area
      $('html, body').animate({
        scrollTop: $(hash).offset().top
      }, 800, function(){
   
        // Add hash (#) to URL when done scrolling (default click behavior)
        window.location.hash = hash;
      });
    }  // End if
  });
});
</script>

</html>
