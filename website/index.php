<!DOCTYPE html>
<html>
<head>
	<title>My Demo Shop</title>
</head>
<body>
	<h1>Welcome to my shop</h1>
	<h4>Available Products:</h4>
	<ul>
		<?php
			// In Docker We Can Access Any Service Via Its Name (docker-compose)
			$json = file_get_contents('http://product-service');
			
			$object = json_decode($json);

			$products = $object->products;

			foreach ($products as $product) {
				echo "<li>$product</li>";
			}
		?>
	</ul>
</body>
</html>