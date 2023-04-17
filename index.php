<?php include 'includes/session.php'; ?>
<?php include 'includes/header.php'; ?>
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto|Open+Sans">
<script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>

<body class="hold-transition skin-blue layout-top-nav">
	<div class="wrapper">

		<?php include 'includes/navbar.php'; ?>
		<div id="carousel-example-generic" class="carousel slide" data-ride="carousel">
			<ol class="carousel-indicators">
				<li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>
				<li data-target="#carousel-example-generic" data-slide-to="1" class=""></li>
				<li data-target="#carousel-example-generic" data-slide-to="2" class=""></li>
			</ol>
			<div class="carousel-inner">
				<div class="item active">
					<img src="images/banner1.png" alt="First slide">
				</div>
				<div class="item">
					<img src="images/banner2.png" alt="Second slide">
				</div>
				<div class="item">
					<img src="images/banner3.png" alt="Third slide">
				</div>
			</div>
			<a class="left carousel-control" href="#carousel-example-generic" data-slide="prev">
				<span class="fa fa-angle-left"></span>
			</a>
			<a class="right carousel-control" href="#carousel-example-generic" data-slide="next">
				<span class="fa fa-angle-right"></span>
			</a>
		</div>
		<div class="content-wrapper">
			<div class="container">

				<!-- Main content -->
				<section class="content">
					<div class="row">
						<div class="col-sm-12">
							<?php
							if (isset($_SESSION['error'])) {
								echo "
	        					<div class='alert alert-danger'>
	        						" . $_SESSION['error'] . "
	        					</div>
	        				";
								unset($_SESSION['error']);
							}
							?>


							<div class="container text-center mt-2 service-container">
								<h1 class="text-center text-black mt-2">ECOMMERCE - DESIGN - DEVELOPMENT</h1>
								<h4 class="text-center text-black">EASYZON are storytellers who are passionate about
									everything digital. Since we began life in 2015, we have embraced each<br> milestone
									in digital marketing with profound zeal. From tried-and-tested strategies to
									cutting-edge technologies, we have <br>delivered time and again, be it E-COMMERCE,
									DESIGN, DEVELOPMENT</h4>
								<div class=" container text-center service-container">
									<!-- Web development -->
									<div class="col-lg-3 col-md-4 col-sm-6 col-xs-12 container_foto ">
										<article class="text-left">
											<h2>Web development</h2>
											<h4>Descripción corta de la imagen en cuestión</h4>
										</article>
										<img src="https://i0.wp.com/easyzon.us/wp-content/uploads/2023/04/web-development.png?resize=1536%2C1536&ssl=1"
											alt="">
									</div>
									<!-- Graphic Design -->
									<div class="col-lg-3 col-md-4 col-sm-6 col-xs-12 container_foto">
										<article class="text-left">
											<h2>Graphic Design</h2>
											<h4>Descripción corta de la imagen en cuestión</h4>
										</article>
										<img src="https://i0.wp.com/easyzon.us/wp-content/uploads/2023/04/graphic-design.png?resize=1536%2C1536&ssl=1"
											alt="Graphic-Design">
									</div>
									<!-- Digital Marketing -->
									<div class="col-lg-3 col-md-4 col-sm-6 col-xs-12 container_foto">
										<article class="text-left">
											<h2>Digital Marketing</h2>
											<h4>Descripción corta de la imagen en cuestión</h4>
										</article>
										<img src="https://i0.wp.com/easyzon.us/wp-content/uploads/2023/04/digital-marketing.png?resize=1536%2C1536&ssl=1"
											alt="Digital Marketing">
									</div>
									<!-- SEO & SMM -->
									<div class="col-lg-3 col-md-4 col-sm-6 col-xs-12 container_foto">
										<article class="text-left">
											<h2>SEO & SMM</h2>
											<h4>Descripción corta de la imagen en cuestión</h4>
										</article>
										<img src="https://i0.wp.com/easyzon.us/wp-content/uploads/2023/04/SEOSMM.png?resize=1536%2C1536&ssl=1"
											alt="SEO & SMM">
									</div>
									<!-- Content Creation -->
									<div class="col-lg-3 col-md-4 col-sm-6 col-xs-12 container_foto">
										<article class="text-left">
											<h2>Content Creation</h2>
											<h4>Descripción corta de la imagen en cuestión</h4>
										</article>
										<img src="https://i0.wp.com/easyzon.us/wp-content/uploads/2023/04/Content-creation.png?resize=1536%2C1536&ssl=1"
											alt="Content Creation">
									</div>
									<!-- Amazon -->
									<div class="col-lg-3 col-md-4 col-sm-6 col-xs-12 container_foto">
										<article class="text-left">
											<h2>Amazon</h2>
											<h4>Descripción corta de la imagen en cuestión</h4>
										</article>
										<img src="https://i0.wp.com/easyzon.us/wp-content/uploads/2023/04/Amazon.png?resize=1536%2C1536&ssl=1"
											alt="Amazon">
									</div>
									<!-- ChatGPT -->
									<div class="col-lg-3 col-md-4 col-sm-6 col-xs-12 container_foto">
										<article class="text-left">
											<h2>ChatGPT</h2>
											<h4>Descripción corta de la imagen en cuestión</h4>
										</article>
										<img src="https://i0.wp.com/easyzon.us/wp-content/uploads/2023/04/chatgpt.png?resize=1536%2C1536&ssl=1"
											alt="ChatGPT">
									</div>
									<!-- Video Animation -->
									<div class="col-lg-3 col-md-4 col-sm-6 col-xs-12 container_foto">
										<article class="text-left">
											<h2>Video Animation</h2>
											<h4>Descripción corta de la imagen en cuestión</h4>
										</article>
										<img src="https://i0.wp.com/easyzon.us/wp-content/uploads/2023/04/video-animation.png?resize=1536%2C1536&ssl=1"
											alt="Video Animation">
									</div>
								</div>
							</div>
							<!--  -->
							<!-- <h2>Monthly Top Sellers</h2>
							<?php
							$month = date('m');
							$conn = $pdo->open();

							try {
								$inc = 3;
								$stmt = $conn->prepare("SELECT *, SUM(quantity) AS total_qty FROM details LEFT JOIN sales ON sales.id=details.sales_id LEFT JOIN products ON products.id=details.product_id WHERE MONTH(sales_date) = '$month' GROUP BY details.product_id ORDER BY total_qty DESC LIMIT 6");
								$stmt->execute();
								foreach ($stmt as $row) {
									$image = (!empty($row['photo'])) ? 'images/' . $row['photo'] : 'images/noimage.jpg';
									$inc = ($inc == 3) ? 1 : $inc + 1;
									if ($inc == 1)
										echo "<div class='row'>";
									echo "
	       							<div class='col-sm-4'>
	       								<div class='box box-solid'>
		       								<div class='box-body prod-body'>
		       									<img src='" . $image . "' width='100%' height='230px' class='thumbnail'>
		       									<h5><a href='product.php?product=" . $row['slug'] . "'>" . $row['name'] . "</a></h5>
		       								</div>
		       								<div class='box-footer'>
		       									<b>&#36; " . number_format($row['price'], 2) . "</b>
		       								</div>
	       								</div>
	       							</div>
	       						";
									if ($inc == 3)
										echo "</div>";
								}
								if ($inc == 1)
									echo "<div class='col-sm-4'></div><div class='col-sm-4'></div></div>";
								if ($inc == 2)
									echo "<div class='col-sm-4'></div></div>";
							} catch (PDOException $e) {
								echo "There is some problem in connection: " . $e->getMessage();
							}

							$pdo->close();

							?>
						</div> -->
						<!-- <div class="col-sm-3">
							<?php include 'includes/sidebar.php'; ?>
						</div> -->
					</div>
				</section>

			</div>
		</div>

		<?php include 'includes/footer.php'; ?>
	</div>
	<script>
		$(document).ready(function () {
			$(".wish-icon i").click(function () {
				$(this).toggleClass("fa-heart fa-heart-o");
			});
		});	
	</script>
	<?php include 'includes/scripts.php'; ?>
</body>

</html>