<?php
$data = file_get_contents('data/sepeda.json');
$sepeda = json_decode($data, true);

$sepeda = $sepeda["menu"];

?>

<!doctype html>
<html lang="en">

<head>
	<!-- Required meta tags -->
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">

	<!-- Bootstrap CSS -->
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
	<link rel="stylesheet" href="style.css">

	<title>FOCUS CYCLE</title>
</head>

<body>

	<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
		<div class="container">
			<a class="navbar-brand" href="#">
				<img src="img/focus.png" width="140">
			</a>
			<button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation"><span class="navbar-toggler-icon"></span>
			</button>
			<div class="collapse navbar-collapse" id="navbarNavAltMarkup">
				<div class="navbar-nav">
					<a class="nav-link" href="index.php">Home</a>
					<a class="nav-link" href="form.php">Form</a>
					<div class="nav-item dropdown">
						<a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown">
							Categories
						</a>
						<ul class="dropdown-menu" aria-labelledby="navbarDropdown">
							<div><a class="dropdown-item" href="fullbike.php">Fullbike</a></div>
							<div><a class="dropdown-item" href="crankset.php">Crankset</a></div>
							<div><a class="dropdown-item" href="wheelset.php">Wheelset</a></div>
							<div><a class="dropdown-item" href="frameset.php">Frameset</a></div>
						</ul>
					</div>
					<a class="nav-link" href="AboutUs.php">About Us</a>
				</div>
			</div>
		</div>
	</nav>

	<div id="carouselExampleCaptions" class="carousel slide" data-bs-ride="carousel">
		<div class="carousel-indicators">
			<button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
			<button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1" aria-label="Slide 2"></button>
			<button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2" aria-label="Slide 3"></button>
		</div>
		<div class="carousel-inner">
			<div class="carousel-item active">
				<img src="img/carousel/slide1.gif" class="d-block w-100">
				<div class="container1">
					<h1>FOCUS CYCLE</h1>
					<p>The best Quality of All Time</p>
					<a href="#" class="btn btn-dark">
						Get Started
					</a>
				</div>
			</div>
			<div class="carousel-item">
				<img src="img/carousel/slid2.png" class="d-block w-100">
				<div class="container1">
					<h1>Be the Fastest</h1>
					<p>Faster than Flash</p>
					<a href="#" class="btn btn-dark">
						Get Started
					</a>
				</div>
			</div>
			<div class="carousel-item">
				<img src="img/carousel/slider4.png" class="d-block w-100">
				<div class="container1">
					<h1>Explore your journey</h1>
					<p>Go Infinity & Beyond</p>
					<a href="#" class="btn btn-dark">
						Explore Now
					</a>
				</div>
			</div>
		</div>
		<button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="prev">
			<span class="carousel-control-prev-icon" aria-hidden="true"></span>
			<span class="visually-hidden">Previous</span>
		</button>
		<button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="next">
			<span class="carousel-control-next-icon" aria-hidden="true"></span>
			<span class="visually-hidden">Next</span>
		</button>
	</div>

	<div class="container">

		<div class="row">
			<div class="col">
				<h1>HOME</h1>
			</div>
		</div>

		<div class="row">
			<?php foreach ($sepeda as $row) : ?>
				<div class="col-md-4">
					<div class="card mb-4">
						<img src="img/pizza/<?= $row["gambar"]; ?>" class="card-img-top">
						<div class="card-body">
							<h5 class="card-title"><?= $row["nama"]; ?></h5>
							<p class="card-text"><?= $row["deskripsi"]; ?></p>
							<h5 class="card-title">Rp. <?= $row["harga"]; ?></h5>
							<a href="#" class="btn btn-dark">Pesan Sekarang</a>
						</div>
					</div>
				</div>
			<?php endforeach; ?>
		</div>

	</div>

	<div class="footer">
		<a href="#">
			<i class="fa fa-facebook-square fa-2x"></i>
		</a>
		<a href="#">
			<i class="fa fa-twitter-square fa-2x"></i>
		</a>
		<a href="#">
			<i class="fa fa-youtube-square fa-2x"></i>
		</a>
		<a href="#">
			<i class="fa fa-linkedin-square fa-2x"></i>
		</a>
		<a href="https://github.com/bimarakajati/" target="_blank">
			<i class="fa fa-github-square fa-2x"></i>
		</a>
		<p>Supreme Store by Bima Rakajati &copy; 2022.</p>
	</div>


	<!-- Optional JavaScript; choose one of the two! -->

	<!-- Option 1: Bootstrap Bundle with Popper -->
	<script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>

	<!-- Option 2: Separate Popper and Bootstrap JS -->

	<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>

</body>

</html>