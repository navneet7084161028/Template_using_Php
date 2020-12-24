<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
  <link rel="stylesheet" href="style.css">

    <?php
        $products = array(
		    "Electronics" => array(
				"Television" => array(
									array(
										"id" => "PR001", 
										"name" => "MAX-001",
										"brand" => "Samsung",
										"imgg" => "images/tennis.png",
										"price" => "Price: $150.00",
											),
									array(
										"id" => "PR002", 
										"name" => "BIG-301",
										"brand" => "Bravia",
										"imgg" => "images/tennis.png",
										"price" => "Price: $150.00",
											),
									array(
										"id" => "PR003", 
										"name" => "APL-02",
										"brand" => "Apple",
										"imgg" => "images/tennis.png",
										"price" => "Price: $150.00",
											)
										),
				"Mobile" => array(
									array(
										"id" => "PR004", 
										"name" => "GT-1980",
										"brand" => "Samsung",
										"imgg" => "images/basketball.png",
										"price" => "Price: $130.00",
											),
										array(
										"id" => "PR005", 
										"name" => "IG-5467",
										"brand" => "Motorola",
										"imgg" => "images/basketball.png",
										"price" => "Price: $130.00",
											),
										array(
										"id" => "PR006", 
										"name" => "IP-8930",
										"brand" => "Apple",
										"imgg" => "images/basketball.png",
										"price" => "Price: $130.00",
											)
										)
								),
				"Jewellery" => array(
							"Earrings" => array(
										array(
										"id" => "PR007", 
										"name" => "ER-001",
										"brand" => "Chopard",
										"imgg" => "images/soccer.png",
										"price" => "Price: $120.00",
											),
										array(
										"id" => "PR008", 
										"name" => "ER-002",
										"brand" => "Mikimoto",
										"imgg" => "images/soccer.png",
										"price" => "Price: $120.00",
											),
										array(
										"id" => "PR009", 
										"name" => "ER-003",
										"brand" => "Bvlgari",
										"imgg" => "images/soccer.png",
										"price" => "Price: $120.00",
												)
											),
							"Necklaces" => array(
										array(
										"id" => "PR010", 
										"name" => "NK-001",
										"brand" => "Piaget",
										"imgg" => "images/football.png",
										"price" => "Price: $110.00",
											),
										array(
										"id" => "PR011", 
										"name" => "NK-002",
										"brand" => "Graff",
										"imgg" => "images/football.png",
										"price" => "Price: $110.00",
											),
										array(
										"id" => "PR012", 
										"name" => "NK-003",
										"brand" => "football",
										"imgg" => "images/football.png",
										"price" => "Price: $110.00",
												)
											)				
									)
					)
				?>
</head>
<body style="background-color:pink;>
<?php include 'header.php';?>
		
		<?php
        foreach ($products as $key => $cat){
			echo "<div class='container text-center bg-info'><h1>$key</h1></div>";
			
			foreach($cat as $key1 => $subcat){
				echo "<div class='container text-center bg-dark'><h3>$key1</h3></div>";
				echo "<div class='container row dis'>";

				foreach($subcat as $key2 => $item){
					echo '<div class=" container col-md coll">

					<img src="'.$item['imgg'].'" alt="image">
					<h4>ID:'.$item['id'].'</h4>
					<h4>Name:'.$item['name'].'</h4>
					<h4>Brand:'.$item['brand'].'</h4>
					<h4>'.$item['price'].'</h4>

					<button type="button" class="btn btn-primary btn-lg">Add Cart</button>
					</div>';
					}
					echo "</div>";
				}
			}
        ?>
<?php include 'footer.php'; ?>
</body>
</html>