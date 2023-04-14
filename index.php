<?php include 'includes/session.php'; ?>
<?php include 'includes/header.php'; ?>
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto|Open+Sans">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
<script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>

<body class="hold-transition skin-blue layout-top-nav">
	<div class="wrapper">

		<?php include 'includes/navbar.php'; ?>

		<div class="content-wrapper">
			<div class="container">

				<!-- Main content -->
				<section class="content">
					<div class="row">
						<div class="col-sm-9">
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
							<?php

							$conn = $pdo->open();
							try {
								$stmt = $conn->prepare("SELECT * FROM category");
								$stmt->execute();
								foreach ($stmt as $row) {
									echo "
				   <li><a href='category.php?category=" . $row['cat_slug'] . "'>" . $row['name'] . "</a></li>
				 ";
				 
								}
							} catch (PDOException $e) {
								echo "There is some problem in connection: " . $e->getMessage();
							}

							$pdo->close();

							?>



<div class="container-fluid contenedor text-center">
   <h1 class="text-center">Collection Name</h1>
   <div class=" container text-center">
      <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12 container_foto ">
         <div class="ver_mas text-center">
            <span  class="lnr lnr-eye"></span>
         </div>
         <article class="text-left">
            <h2><?php echo  $row['name']  ?><br>LA IMAGEN</h2>
            <h4>Descripción corta de la imagen en cuestión</h4>
         </article>
         <img src="https://img-aws.ehowcdn.com/400x400/ds-img.studiod.com/Half_Dome_from_Glacier_Point0_1.jpg" alt="">
      </div>
      <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12 container_foto">
         <div class="ver_mas text-center">
            <span id="click" class="lnr lnr-eye"></span>
         </div>
         <article class="text-left">
            <h2><?php echo  $row['name']  ?>	<br>LA IMAGEN</h2>
            <h4>Descripción corta de la imagen en cuestión</h4>
         </article>
         <img src="https://pbs.twimg.com/profile_images/781518570018648065/HcvZhTVn_400x400.jpg" alt="">
      </div>
      <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12 container_foto">
         <div class="ver_mas text-center">
            <span id="click" class="lnr lnr-eye"></span>
         </div>
         <article class="text-left">
            <h2>TÍTULO DE <br>LA IMAGEN</h2>
            <h4>Descripción corta de la imagen en cuestión</h4>
         </article>
         <img src="https://pbs.twimg.com/profile_images/781518570018648065/HcvZhTVn_400x400.jpg" alt="">
      </div>
      </div>
</div>


<style>
	.contenedor {
	height: 100%;
	padding: 5% 0;
}

h1 {
	color: #FCFBFA;
}

.container_foto {
	background-color: rgba(57, 62, 93, 0.7);
	padding: 0;
	overflow: hidden;
	max-width: 350px;
	margin: 5px;
}

.container_foto article {
	padding: 10%;
	position: absolute;
	bottom: 0;
	z-index: 1;
	-webkit-transition: all 0.5s ease;
	-moz-transition: all 0.5s ease;
	-o-transition: all 0.5s ease;
	-ms-transition: all 0.5s ease;
	transition: all 0.5s ease;
}

.container_foto h2 {
	color: #fff;
	font-weight: 800;
	font-size: 25px;
	border-bottom: #fff solid 1px;
}

.container_foto h4 {
	font-weight: 300;
	color: #fff;
	font-size: 16px;
}

.container_foto img {
	width: 100%;
	top: 0;
	left: 0;
	opacity: 0.4;
	-webkit-transition: all 4s ease;
	-moz-transition: all 4s ease;
	-o-transition: all 4s ease;
	-ms-transition: all 4s ease;
	transition: all 4s ease;
}

.ver_mas {
	background-color: #FEB66C;
	position: absolute;
	width: 100%;
	height: 70px;
	bottom: 0;
	z-index: 1;
	opacity: 0;
	transform: translate(0px, 70px);
	-webkit-transform: translate(0px, 70px);
	-moz-transform: translate(0px, 70px);
	-o-transform: translate(0px, 70px);
	-ms-transform: translate(0px, 70px);
	-webkit-transition: all 0.2s ease-in-out;
	-moz-transition: all 0.2s ease-in-out;
	-o-transition: all 0.2s ease-in-out;
	-ms-transition: all 0.2s ease-in-out;
	transition: all 0.2s ease-in-out;
}

.ver_mas span {
	font-size: 40px;
	color: #fff;
	position: relative;
	margin: 0 auto;
	width: 100%;
	top: 13px;
}


/*hovers*/

.container_foto:hover {
	cursor: pointer;
}

.container_foto:hover img {
	opacity: 0.1;
	transform: scale(1.5);
}

.container_foto:hover article {
	transform: translate(2px, -69px);
	-webkit-transform: translate(2px, -69px);
	-moz-transform: translate(2px, -69px);
	-o-transform: translate(2px, -69px);
	-ms-transform: translate(2px, -69px);
}

.container_foto:hover .ver_mas {
	transform: translate(0px, 0px);
	-webkit-transform: translate(0px, 0px);
	-moz-transform: translate(0px, 0px);
	-o-transform: translate(0px, 0px);
	-ms-transform: translate(0px, 0px);
	opacity: 1;
}
</style>













<div class="product-container">
  <div class="product-card">
    <img src="<?php echo "./images/". $row['photo']  ?>" alt="Product Image">
    <h3><?php echo  $row['name']  ?></h3>
    <h4><?php echo  $row['price']   ?></h4>
    <button>Add to Cart</button>
  </div>
</div>
  <!-- <div class="product-card">
    <img src="product-image.jpg" alt="Product Image">
    <h3>Product Name</h3>
    <p>Product Description</p>
    <button>Add to Cart</button>
  </div> -->
  <!-- <div class="product-card">
    <img src="product-image.jpg" alt="Product Image">
    <h3>Product Name</h3>
    <p>Product Description</p>
    <button>Add to Cart</button>
  </div> -->
<!-- </div> -->
<style>
.product-container {
  display: flex;
  flex-wrap: wrap;
}

.product-card {
  width: 300px;
  margin: 20px;
  border: 1px solid #ccc;
  box-shadow: 0 0 10px #ccc;
  padding: 20px;
  text-align: center;
}

.product-card img {
  max-width: 100%;
}

.product-card h3 {
  margin-top: 10px;
  font-size: 24px;
}

.product-card p {
  margin-top: 10px;
  font-size: 16px;
  line-height: 1.5;
}

.product-card button {
  margin-top: 20px;
  padding: 10px 20px;
  font-size: 18px;
  background-color: #000;
  color: #fff;
  border: none;
  cursor: pointer;
}

.product-card button:hover {
  background-color: #333;
}



</style>


							<!--  -->
							<h2>Monthly Top Sellers</h2>
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
						</div>
						<div class="col-sm-3">
							<?php include 'includes/sidebar.php'; ?>
						</div>
					</div>
				</section>

			</div>
		</div>

		<?php include 'includes/footer.php'; ?>
	</div>
	<script>
$(document).ready(function(){
	$(".wish-icon i").click(function(){
		$(this).toggleClass("fa-heart fa-heart-o");
	});
});	
</script>
	<?php include 'includes/scripts.php'; ?>
</body>

</html>