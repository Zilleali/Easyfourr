<?php include 'includes/session.php'; ?>
<?php include 'includes/header.php'; ?>
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
	        			if(isset($_SESSION['error'])){
	        				echo "
	        					<div class='alert alert-danger'>
	        						".$_SESSION['error']."
	        					</div>
	        				";
	        				unset($_SESSION['error']);
	        			}
	        		?>
	        		
					<div class="cards-list">
  
          <div class="cards-list">
                <!-- Digital Marketing -->
                <div class="card 1">
                  <div class="card_image"> <img src="images/digitalmarketing.jpg" alt="Digital Marketing" /> </div>
                  <a href="https://easy4.zilleali.com/category.php?category=Digital-Marketing">
                    <div class="card_title title-white">
                      <p>Digital Marketing</p>
                    </div>
                  </a>
                </div>
                <!-- Graphics & Design -->
                <div class="card 1">
                  <div class="card_image"> <img src="images/design2.jpg" alt="Graphics & Design" /> </div>
                  <a href="https://easy4.zilleali.com/category.php?category=Graphics-Design">
                    <div class="card_title title-white">
                      <p>Graphics & Design</p>
                    </div>
                  </a>
                </div>
                <!-- Programing & Tech -->
                <div class="card 1">
                  <div class="card_image"> <img src="images/h1.jpg" alt="Programing & Tech" /> </div>
                  <a href="https://easy4.zilleali.com/category.php?category=Programing-Tech">
                    <div class="card_title title-white">
                      <p>Programing & Tech</p>
                    </div>
                  </a>
                </div>
                <!-- Video Editing -->
                <div class="card 1">
                  <div class="card_image"> <img src="images/h3.jpg" alt="Video Editing" /> </div>
                  <a href="https://easy4.zilleali.com/category.php?category=Video-Editing">
                    <div class="card_title title-white">
                      <p>Video Editing</p>
                    </div>
                  </a>
                </div>
                <!-- Contant Creation -->
                <div class="card 1">
                  <div class="card_image"> <img src="images/content-writing2.jpg" /> </div>
                  <a href="https://easy4.zilleali.com/category.php?category=Contant-Creation">
                    <div class="card_title title-white">
                      <p>Contant Creation</p>
                    </div>
                  </a>
                </div>
                <!-- SEO & SMM -->
                <div class="card 1">
                  <div class="card_image"> <img src="images/seo.jpg" alt="SEO & SMM" /> </div>
                  <a href="https://easy4.zilleali.com/category.php?category=SEO-SMM">
                    <div class="card_title title-white">
                      <p>SEO & SMM</p>
                    </div>
                  </a>
                </div>


  <!-- <div class="card 2">
  <div class="card_image">
    <img src="https://cdn.blackmilkclothing.com/media/wysiwyg/Wallpapers/PhoneWallpapers_FloralCoral.jpg" />
    </div>
  <div class="card_title title-white">
    <p>Card Title</p>
  </div>
</div> -->

<!-- <div class="card 3">
  <div class="card_image">
    <img src="https://media.giphy.com/media/10SvWCbt1ytWCc/giphy.gif" />
  </div>
  <div class="card_title">
    <p>Card Title</p>
  </div>
</div> -->
  
  <!-- <div class="card 4">
  <div class="card_image">
    <img src="https://media.giphy.com/media/LwIyvaNcnzsD6/giphy.gif" />
    </div>
  <div class="card_title title-black">
    <p>Card Title</p>
  </div>
  </div> -->

</div>
<style>
	.cards-list {
  z-index: 0;
  width: 100%;
  display: flex;
  justify-content: space-around;
  flex-wrap: wrap;
}

.card {
  margin: 30px auto;
  width: 300px;
  height: 300px;
  border-radius: 40px;
box-shadow: 5px 5px 30px 7px rgba(0,0,0,0.25), -5px -5px 30px 7px rgba(0,0,0,0.22);
  cursor: pointer;
  transition: 0.4s;
}

.card .card_image {
  width: inherit;
  height: inherit;
  border-radius: 40px;
}

.card .card_image img {
  width: inherit;
  height: inherit;
  border-radius: 40px;
  object-fit: cover;
}

.card .card_title {
  text-align: center;
  border-radius: 0px 0px 40px 40px;
  font-family: sans-serif;
  font-weight: bold;
  font-size: 30px;
  margin-top: -80px;
  height: 40px;
}

.card:hover {
  transform: scale(0.9, 0.9);
  box-shadow: 5px 5px 30px 15px rgba(0,0,0,0.25), 
    -5px -5px 30px 15px rgba(0,0,0,0.22);
}

.title-white {
  color: white;
}

.title-black {
  color: black;
}

@media all and (max-width: 500px) {
  .card-list {
    /* On small screens, we are no longer using row direction but column */
    flex-direction: column;
  }
}


/* 
.card {
  margin: 30px auto;
  width: 300px;
  height: 300px;
  border-radius: 40px;
  background-image: url('https://i.redd.it/b3esnz5ra34y.jpg');
  background-size: cover;
  background-repeat: no-repeat;
  background-position: center;
  background-repeat: no-repeat;
box-shadow: 5px 5px 30px 7px rgba(0,0,0,0.25), -5px -5px 30px 7px rgba(0,0,0,0.22);
  transition: 0.4s;
} */

</style>
		            <!-- <h2>Monthly Top Sellers</h2>
		       		<?php
		       			$month = date('m');
		       			$conn = $pdo->open();

		       			try{
		       			 	$inc = 3;	
						    $stmt = $conn->prepare("SELECT *, SUM(quantity) AS total_qty FROM details LEFT JOIN sales ON sales.id=details.sales_id LEFT JOIN products ON products.id=details.product_id WHERE MONTH(sales_date) = '$month' GROUP BY details.product_id ORDER BY total_qty DESC LIMIT 6");
						    $stmt->execute();
						    foreach ($stmt as $row) {
						    	$image = (!empty($row['photo'])) ? 'images/'.$row['photo'] : 'images/noimage.jpg';
						    	$inc = ($inc == 3) ? 1 : $inc + 1;
	       						if($inc == 1) echo "<div class='row'>";
	       						echo "
	       							<div class='col-sm-4'>
	       								<div class='box box-solid'>
		       								<div class='box-body prod-body'>
		       									<img src='".$image."' width='100%' height='230px' class='thumbnail'>
		       									<h5><a href='product.php?product=".$row['slug']."'>".$row['name']."</a></h5>
		       								</div>
		       								<div class='box-footer'>
		       									<b>&#36; ".number_format($row['price'], 2)."</b>
		       								</div>
	       								</div>
	       							</div>
	       						";
	       						if($inc == 3) echo "</div>";
						    }
						    if($inc == 1) echo "<div class='col-sm-4'></div><div class='col-sm-4'></div></div>"; 
							if($inc == 2) echo "<div class='col-sm-4'></div></div>";
						}
						catch(PDOException $e){
							echo "There is some problem in connection: " . $e->getMessage();
						}

						$pdo->close();

		       		?> 
	        	</div>
	        	<div class="col-sm-3">
	        		<?php include 'includes/sidebar.php'; ?>
	        	</div>
	        </div> -->
	      </section>
	     
	    </div>
	  </div>
  
  	<?php include 'includes/footer.php'; ?>
</div>

<?php include 'includes/scripts.php'; ?>
</body>
</html>