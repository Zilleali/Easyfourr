<?php include 'includes/session.php'; ?>
<?php include 'includes/header.php'; ?>
<body class="hold-transition skin-blue layout-top-nav">
  <link rel="stylesheet" href="style1.css">
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
	        		<!-- Facts Start -->
<div class="container">
    <div class="sectiontitle text-black">
      <h2 class="text-black"> statistics</h2>
      <span class="headerLine text-black"></span>
    </div>
   
    <div id="projectFacts" class="sectionClass">
      <div class="fullWidth eight columns">
        <div class="projectFactsWrap ">
          <div class="item wow fadeInUpBig animated animated" data-number="12" style="visibility: visible;">
            <i class="fa fa-briefcase"></i>
            <p id="number1" class="number">12</p>
            <span></span>
            <p>Projects done</p>
          </div>
          <div class="item wow fadeInUpBig animated animated" data-number="100%" style="visibility: visible;">
            <i class="fa fa-smile-o"></i>
            <p id="number2" class="number">100%</p>
            <span></span>
            <p>Happy clients</p>
          </div>
          <div class="item wow fadeInUpBig animated animated" data-number="359" style="visibility: visible;">
            <i class="fa fa-coffee"></i>
            <p id="number3" class="number">359</p>
            <span></span>
            <p>Cups of coffee</p>
          </div>
          <div class="item wow fadeInUpBig animated animated" data-number="246" style="visibility: visible;">
            <i class="fa fa-camera"></i>
            <p id="number4" class="number">246</p>
            <span></span>
            <p>Photos taken</p>
          </div>
        </div>
      </div>
    </div>
    </div>
  
    <!-- Facts End -->
					<!-- <div class="cards-list"> -->
          <div class="container">
                <h1 class="text-left text-black " style="font-size:50px"> Find The Perfect Services<br> For Your
                  Business
                </h1>
              </div>
  
<div class="card 1">
  <div class="card_image"> <img src="images/digitalmarketing.jpg" /> </div>
  <div class="card_title title-white">
    <p>Digital Marketing</p>
  </div>
</div>

<div class="card 1">
  <div class="card_image"> <img src="images/design2.jpg" /> </div>
  <div class="card_title title-white">
    <p>Graphics & Design</p>
  </div>
</div>
<div class="card 1">
  <div class="card_image"> <img src="images/h1.jpg" /> </div>
  <div class="card_title title-white">
    <p>Programing & Tech</p>
  </div>
</div>
<div class="card 1">
  <div class="card_image"> <img src="images/h3.jpg" /> </div>
  <div class="card_title title-white">
    <p>Video Editing</p>
  </div>
</div>

<div class="card 1">
  <div class="card_image"> <img src="images/content-writing2.jpg" /> </div>
  <div class="card_title title-white">
    <p>Contant Creation</p>
  </div>
</div>
<div class="card 1">
  <div class="card_image"> <img src="images/seo.jpg" /> </div>
  <div class="card_title title-white">
    <p>SEO & SMM</p>
  </div>
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
  
  

  
  

  <section class="section4">
       <div class="col-sm-6 ">
           <h1><b>The best part? Everything.</b></h1>
           <h3><b>Stick to your budget</b></h3>
           <p><h4>Find the right service for every price point. No hourly rates, just project-based pricing.</h4></p>
           <h3><b>Get quality work done quickly</b></h3>
           <p><h4>Hand your project over to a talented freelancer in minutes, get long-lasting results.</h4></p>
           <h3><b>Pay when you're happy</b></h3>
           <p><h4>Upfront quotes mean no surprises. Payments only get released when you approve.</h4></p>
           <h3><b>Count on 24/7 support</b></h3>
           <p><h4>Our round-the-clock support team is available to help anytime, anywhere.</h4></p>
        </div>

        <div class="col-sm-6">
             <img src="images/banner4.jpg" alt="" srcset="">
        </div>
  </section>

<style>
  


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