<?php
	include 'includes/session.php';
	include 'includes/slugify.php';

	if(isset($_POST['add'])){
		$name = $_POST['name'];
		$slug = slugify($name);
		$category = $_POST['category'];
		$price = $_POST['price'];
		$description = $_POST['description'];
		$filename = $_FILES['photo']['name'];
		// basic Price For GIG
		$basicprice = $_POST['basic_price'];$basicpricetitle = $_POST['basic_price_title'];
		$basicdescription = $_POST['basic_description'];
		// Standerd Price For GIG
		// $standerdprice = $_POST['standerd_price'];$standerdpricetitle = $_POST['standerd_price_title'];
		// $standerddescription = $_POST['standerd_description'];
		// Premium Price For GIG
		// $premiumprice = $_POST['premium_price'];$premiumpricetitle = $_POST['premium_price_title'];
		// $premiumdescription = $_POST['premium_description'];



		$conn = $pdo->open();

		$stmt = $conn->prepare("SELECT *, COUNT(*) AS numrows FROM products WHERE slug=:slug");
		$stmt->execute(['slug'=>$slug]);
		$row = $stmt->fetch();

		if($row['numrows'] > 0){
			$_SESSION['error'] = 'Product already exist';
		}
		else{
			if(!empty($filename)){
				$ext = pathinfo($filename, PATHINFO_EXTENSION);
				$new_filename = $slug.'.'.$ext;
				move_uploaded_file($_FILES['photo']['tmp_name'], '../images/'.$new_filename);	
			}
			else{
				$new_filename = '';
			}

			try{
				$stmt = $conn->prepare("INSERT INTO products (category_id, name, description, slug, price, photo,
				
				basic_price_title,basic_price,basic_description,
				VALUES (:category, :name, :description, :slug, :price, :photo,
				:basic_price_title,:basic_price,:basic_description
				
				
				)");
				$stmt->execute(['category'=>$category, 'name'=>$name, 'description'=>$description, 'slug'=>$slug, 'price'=>$price, 'photo'=>$new_filename,
				'basic_price_title'=>$basicpricetitle,'basic_price'=>$basicprice ,'basic_description'=>$basicdescription	
			]);
				$_SESSION['success'] = 'Product added successfully';

			}
			catch(PDOException $e){
				$_SESSION['error'] = $e->getMessage();
			}
		}

		$pdo->close();
	}
	else{
		$_SESSION['error'] = 'Fill up product form first';
	}

	header('location: products.php');

?>