<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Document</title>
	<style>
		.portfolio-box img {
			width: 100%;
			height: 300px;
			object-fit: cover;
		}

		.page-section {
			margin: 0%;
			padding: 0%;
			height: 12vh;
		}
	</style>
</head>

<body>
	<!-- Masthead-->
	<header class="masthead">
		<div class="container h-100">
			<div class="row h-100 align-items-center justify-content-center text-center">
				<div class="col-lg-10 align-self-end mb-4">
					<div class="card" id="filter-book">
						<div class="card-body">
							<div class="container-fluid">
								<form action="index.php?page=list" id="filter" method="POST">
									<div class="row">
										<div class="col-md-3">
											<label for="date_in">Check-in Date</label>
											<input type="date" class="form-control" name="date_in" id="date_in"
												min="<?php echo date('Y-m-d'); ?>" required>
										</div>
										<div class="col-md-3">
											<label for="date_out">Check-out Date</label>
											<input type="date" class="form-control" name="date_out" id="date_out"
												min="<?php echo date('Y-m-d'); ?>" required>
										</div>
										<div class="col-md-3">
											<br>
											<button class="btn-btn-block btn-primary mt-3">Check Availability</button>
										</div>
									</div>
								</form>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</header>
	<section class="page-section"></section>
	<div id="portfolio">
		<div class="container-fluid p-0">
			<div class="row no-gutters ">
				<?php
				include 'admin/db_connect.php';
				$qry = $conn->query("SELECT * FROM room_categories ORDER BY RAND()");
				while ($row = $qry->fetch_assoc()):
					?>
					<div class="col-lg-4 col-sm-6">
						<a class="portfolio-box" href="#">
							<img class="img-fluid" src="assets/img/<?php echo $row['cover_img'] ?>" alt="" />
							<div class=""></div>
							<div class="portfolio-box-caption">
								<div class="project-category text-white-30">
									<?php echo "₹ " . number_format($row['price'], 2) ?> per day</div>
								<div class="project-name"><?php echo $row['name'] ?></div>
							</div>
						</a>
					</div>
				<?php endwhile; ?>
			</div>
		</div>
		<?php
		// Set include_sections to true only for the Counter section
		$include_sections = true;
		include './additionals/features.php';
		include './additionals/gallery.php';
		include './additionals/testimonials.php';
		include './additionals/counter.php';
		?>
	</div>
</body>

</html>