<?php $basename = basename($_SERVER['SCRIPT_FILENAME']); ?>
<!doctype html>
	<html lang="en">
	<head>
		<!-- Required meta tags -->
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
		<meta name="description" content="" />
		<meta name="keywords" content="" />
		<title>Project Title</title>
		<?php include 'inc/header.php'; ?>
		<div id="carouselExampleIndicators" class="carousel slide carousel-fade" data-bs-interval="5000" data-bs-ride="carousel">
			<div class="carousel-indicators">
				<button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
				<button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1" aria-label="Slide 2"></button>
				<button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2" aria-label="Slide 3"></button>
			</div>
			<div class="carousel-inner">
				<div class="carousel-item active">
					<img src="https://via.placeholder.com/1920x700.png?text=Naturessungrown+Banner1" class="d-block w-100" alt="Image 1">
				</div>
				<div class="carousel-item">
					<img src="https://via.placeholder.com/1920x700.png?text=Naturessungrown+Banner2" class="d-block w-100" alt="Image 2">
				</div>
				<div class="carousel-item">
					<img src="https://via.placeholder.com/1920x700.png?text=Naturessungrown+Banner3" class="d-block w-100" alt="Image 3">
				</div>
			</div>
			<button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="prev">
				<span class="carousel-control-prev-icon" aria-hidden="true"></span>
				<span class="visually-hidden">Previous</span>
			</button>
			<button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="next">
				<span class="carousel-control-next-icon" aria-hidden="true"></span>
				<span class="visually-hidden">Next</span>
			</button>
		</div>
		<main id="main" style="min-height: 2000px;">
			<div class="container">
				<h1>About US</h1>
			</div>
		</main>
		<?php include 'inc/footer.php'; ?>