<?php include 'includes/session.php'; ?>
<?php
$conn = $pdo->open();

$slug = $_GET['product'];

try {

	$stmt = $conn->prepare("SELECT *, products.name AS prodname, category.name AS catname, products.id AS prodid,
	products.basic_price_title As bpt ,products.basic_price As bp,products.basic_description As basicd
	FROM products LEFT JOIN category ON category.id=products.category_id WHERE slug = :slug");
	$stmt->execute(['slug' => $slug]);
	$product = $stmt->fetch();

} catch (PDOException $e) {
	echo "There is some problem in connection: " . $e->getMessage();
}

//page view
$now = date('Y-m-d');
if ($product['date_view'] == $now) {
	$stmt = $conn->prepare("UPDATE products SET counter=counter+1 WHERE id=:id");
	$stmt->execute(['id' => $product['prodid']]);
} else {
	$stmt = $conn->prepare("UPDATE products SET counter=1, date_view=:now WHERE id=:id");
	$stmt->execute(['id' => $product['prodid'], 'now' => $now]);
}

?>
<?php include 'includes/header.php'; ?>

<body class="hold-transition skin-blue layout-top-nav">
	<script>
		(function (d, s, id) {
			var js, fjs = d.getElementsByTagName(s)[0];
			if (d.getElementById(id)) return;
			js = d.createElement(s); js.id = id;
			js.src = 'https://connect.facebook.net/en_US/sdk.js#xfbml=1&version=v2.12';
			fjs.parentNode.insertBefore(js, fjs);
		}(document, 'script', 'facebook-jssdk'));
	</script>
	<div class="wrapper">

		<?php include 'includes/navbar.php'; ?>

		<div class="content-wrapper">
			<div class="container">

				<!-- Main content -->
				<section class="content">
					<div class="row">
						<div class="col-sm-9">
							<div class="callout" id="callout" style="display:none">
								<button type="button" class="close"><span aria-hidden="true">&times;</span></button>
								<span class="message"></span>
							</div>
							<div class="col-lg-12">
								<div class="col-sm-6">
									<h1 class="page-header">
										<?php echo $product['prodname']; ?>
									</h1>
									<!-- Gig Category -->
									<p><b>Category:</b> <a
											href="category.php?category=<?php echo $product['cat_slug']; ?>"><?php echo $product['catname']; ?></a></p>
									<!-- <img src="<?php echo (!empty($product['photo'])) ? 'images/' . $product['photo'] : 'images/noimage.jpg'; ?>"
										width="100%" class="zoom"
										data-magnify-src="images/large-<?php echo $product['photo']; ?>"> -->
									<!-- Gig Price -->
									<!-- <h3><b>&#36; <?php echo number_format($product['price'], 2); ?></b></h3> -->

									<!-- Gig Description -->
									<h3><b>Description:</b></h3>
									<p style="font-size: 18px !important;">
										<?php echo $product['description']; ?>
									</p>
								</div>
								<!-- Page Center Row -->
								<div class="col-sm-8 col-lg-8">
								<img src="<?php echo (!empty($product['photo'])) ? 'images/' . $product['photo'] : 'images/noimage.jpg'; ?>"
										width="100%" class="zoom"
										data-magnify-src="images/large-<?php echo $product['photo']; ?>">
									<!-- <br><br>
									<div class="sidenav">
										<div class="tab">
											<button class="tablinks" onclick="openCity(event, 'London')"
												id="defaultOpen">Basic</button>
											<button class="tablinks"
												onclick="openCity(event, 'Paris')">Standard</button>
											<button class="tablinks" onclick="openCity(event, 'Tokyo')">Premium</button>
										</div>

										<div id="London" class="tabcontent">
											<div class="price">
												<h3 class="text-left" name="basic_price_title"><?php echo $product['basicd']; ?></h3>
												<h3 class="text-right"></h3>
											</div>
											<p  ></p>
										</div>

										<div id="Paris" class="tabcontent">
											<div class="price">
												<h3 class="text-left" name="standerd-price-title">SHOPIFY</h3>
												<h3 class="text-right" name="standerd-price">30$</h3>
											</div>

											<p>customization of the home page and the product page Before placing your
												order, please contact us.</p>
										</div>

										<div id="Tokyo" class="tabcontent">
											<div class="price">
												<h3 class="text-left" name="standerd-price-title">SHOPIFY ADVANCED
												</h3>
												<h3 class="text-right" name="standerd-price">30$</h3>
											</div>
											<p>Five pages in a theme design. Get in touch before placing your order.</p>
										</div>
									</div> -->
									<!-- Sidebar CSS -->
									<style>
										/* Style the tab */
										.tab {
											overflow: hidden;
											border: 1px solid #ccc;
											/* background-color: #f1f1f1; */
										}

										/* Style the buttons inside the tab */
										/* .tab button {
											background-color: inherit; */
											/* float: left; */
											/* border: none;
											outline: none;
											cursor: pointer;
											padding: 14px 16px;
											transition: 0.3s;
											font-size: 17px;
										} */

										/* Change background color of buttons on hover */
										/* .tab button:hover {
											background-color: #ddd;
										} */

										/* Create an active/current tablink class */
										/* .tab button.active {
											background-color: #ccc;
										} */
										/* Style the tab content */
										/* .tabcontent {
											display: none;
											padding: 6px 12px;
											border: 1px solid #ccc;
											border-top: none;
										}							
										.tab {
											border-radius: 5px;
											border: 1px solid #000;
											text-align: center;
										}

										.tab .button {
											float: none !important;
										}

										.sidenav {
											width: 330px;
											position: fixed;
											z-index: 1;
											top: 20px;
											overflow-x: hidden;
											padding: 40px 0;
										}

										.price {
											display: flex;
											justify-content: space-between;
										}
									</style> */
								</div>
							
							</div>
							
						</div>
						
					</div>
				</section>

			</div>
		</div>
		<?php $pdo->close(); ?>
		<?php include 'includes/footer.php'; ?>
	</div>

	<?php include 'includes/scripts.php'; ?>
	<script>
		$(function () {
			$('#add').click(function (e) {
				e.preventDefault();
				var quantity = $('#quantity').val();
				quantity++;
				$('#quantity').val(quantity);
			});
			$('#minus').click(function (e) {
				e.preventDefault();
				var quantity = $('#quantity').val();
				if (quantity > 1) {
					quantity--;
				}
				$('#quantity').val(quantity);
			});

		});
	</script>
	<script>
		function openCity(evt, cityName) {
			var i, tabcontent, tablinks;
			tabcontent = document.getElementsByClassName("tabcontent");
			for (i = 0; i < tabcontent.length; i++) {
				tabcontent[i].style.display = "none";
			}
			tablinks = document.getElementsByClassName("tablinks");
			for (i = 0; i < tablinks.length; i++) {
				tablinks[i].className = tablinks[i].className.replace(" active", "");
			}
			document.getElementById(cityName).style.display = "block";
			evt.currentTarget.className += " active";
		}

		// Get the element with id="defaultOpen" and click on it
		document.getElementById("defaultOpen").click();
	</script>

</body>

</html>