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
  	.navbar{
  		padding-left: 50px;
  		padding-right: 50px;
  	}
  	.fakeimg {
     	height: 200px;
     	background: #aaa;
  	}
  	.carousel-inner img {
      	width: 100%;
      	height: 100%;
  	}
  	.jam {
	  text-align: center;
	  font-size: 60px;
	  margin-top:0px;
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
	        <a class="nav-link" href="#">Beranda</a>
	      </li>
	      <li class="nav-item dropdown">
		    <a class="nav-link dropdown-toggle" href="#" id="navbardrop" data-toggle="dropdown">
		      Informasi Lomba
		    </a>
		    <div class="dropdown-menu">
		      <a class="dropdown-item" href="info.php">Lokasi Lomba dan Tanggal</a>
		      <a class="dropdown-item" href="#">Kategori Lomba</a>
		      <a class="dropdown-item" href="#">Pengambilan Paket Lomba</a>
		      <a class="dropdown-item" href="#">Hadiah</a>
		      <a class="dropdown-item" href="#">Regulasi dan Pengaturan</a>
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

	<div id="demo" class="carousel slide" data-ride="carousel">

	  <!-- Indicators -->
	  <ul class="carousel-indicators">
	    <li data-target="#demo" data-slide-to="0" class="active"></li>
	    <li data-target="#demo" data-slide-to="1"></li>
	    <li data-target="#demo" data-slide-to="2"></li>
	  </ul>

	  <!-- The slideshow -->
	  <div class="carousel-inner">
	    <div class="carousel-item active">
	      <img src="image/4.jpg" alt="Los Angeles">
	    </div>
	    <div class="carousel-item">
	      <img src="image/5.jpg" alt="Chicago" width="1100" height="500">
	    </div>
	    <div class="carousel-item">
	      <img src="image/6.jpg" alt="New York" width="1100" height="500">
	    </div>
	  </div>

	  <!-- Left and right controls -->
	  <a class="carousel-control-prev" href="#demo" data-slide="prev">
	    <span class="carousel-control-prev-icon"></span>
	  </a>
	  <a class="carousel-control-next" href="#demo" data-slide="next">
	    <span class="carousel-control-next-icon"></span>
	  </a>
	</div>

	<!-- Jam -->
	<div class="container center" style="margin-top:50px; margin-bottom:50px">
		<p class="jam" id="jam"></p>
	</div>

	<div class="container" style="margin-top:50px; margin-bottom:50px">
		<div class="row">
			<div class="col-sm-6">
				<iframe class="embed-responsive-item" width="100%" height="325" src="https://www.youtube.com/embed/X2c31OLaPOM" frameborder="0" allow="autoplay; encrypted-media" allowfullscreen></iframe>
			</div>
			<div class="col-sm-6">
				Semen Indonesia sadar bahwa keberlanjutan operasional yang disertai dengan terjaganya kelestarian alam dan meningkatnya kesejahteraan sosial akan meningkatkan efektivitas dan efisiensi dalam menjalankan kegiatan operasi. Dalam setiap aktivitas operasional, kami terus memastikan keseimbangan keberlanjutan dari aspek ekonomi (profit), sosial (people), dan lingkungan (planet).
				<br>
				Di tahun 2018 ini, Semen Indonesia mengadakan lomba lari trail dalam rangka memperingati Hari Ulang Tahun ke-61 Pabrik Gresik dengan nama “Semen Indonesia Trail Run”. Lari trail menawarkan pengalaman unik yang berbeda dengan melintasi jalan tanah dan bukit yang menanjak. Permukaan tanah jalur trail juga tidak sekeras permukaan aspal sehingga memberikan bentuk latihan fisik yang berbeda bagi tubuh.
				<br>
				Kegiatan ini merupakan wadah untuk berlomba bagi pelari dan penyuka olahraga lari, serta sarana untuk memulai hidup sehat dengan berolahraga rutin. Pada masa mendatang, Semen Indonesia Trail Run diharapkan mampu menjadi cikal bakal ajang lomba lari yang bergengsi dan berskala nasional dan menjadi ikon Industri Hijau.
			</div>
		</div>
	</div>

	<div class="jumbotron text-center" style="margin-bottom:0; background-color: red">
	  <p>Copyright</p>
	</div>

	<script>
	// Set the date we're counting down to
	var countDownDate = new Date("Nov 4, 2018 05:00:00").getTime();

	// Update the count down every 1 second
	var x = setInterval(function() {

	    // Get todays date and time
	    var now = new Date().getTime();

	    // Find the distance between now an the count down date
	    var distance = countDownDate - now;

	    // Time calculations for days, hours, minutes and seconds
	    var days = Math.floor(distance / (1000 * 60 * 60 * 24));
	    var hours = Math.floor((distance % (1000 * 60 * 60 * 24)) / (1000 * 60 * 60));
	    var minutes = Math.floor((distance % (1000 * 60 * 60)) / (1000 * 60));
	    var seconds = Math.floor((distance % (1000 * 60)) / 1000);

	    // Output the result in an element with id="demo"
	    document.getElementById("jam").innerHTML = days + "d " + hours + "h "
	    + minutes + "m " + seconds + "s ";

	    // If the count down is over, write some text
	    if (distance < 0) {
	        clearInterval(x);
	        document.getElementById("jam").innerHTML = "EXPIRED";
	    }
	}, 1000);
	</script>
</body>
</html>
