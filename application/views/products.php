<!doctype html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport"
		  content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
	<meta http-equiv="X-UA-Compatible" content="ie=edge">
	<title>Document</title>
</head>
<body>
<h1>Products</h1>
<h4>Your Cart (<?= $this->session->userdata('cart_count'); ?>)</h4>
<table>
	<tr>
		<th>Description</th>
		<th>Price</th>
		<th>Qty</th>
	</tr>
	<tr>
		<td><h2>Dojo Tshirt</h2></td>
		<td><h2>19.99</h2></td>
		<td>
			<form action='products/add_to_cart' method="get">
				<select name="dojo_tshirt">
					<option value="1">1</option>
					<option value="2">2</option>
					<option value="3">3</option>
				</select>
				<input type="submit">
			</form>
		</td>
	</tr>

	<tr>
		<td><h2>Dojo cups</h2></td>
		<td><h2>2.99</h2></td>
		<td>
			<form action='products/add_to_cart' method="get">
				<select name="dojo_cups">
					<option value="1">1</option>
					<option value="2">2</option>
					<option value="3">3</option>
				</select>
				<input type="submit">
			</form>
		</td>
	</tr>

</table>



<h2>Cart List</h2>
<?php

if($this->session->userdata('cart_count')){
	if ($tshirt = $this->session->userdata('dojo_tshirt')){
//		echo "<h3>Name: {$tshirt['name']} , {$tshirt['price']}, {$tshirt['qty']}</h3>";
		foreach ($tshirt as $key => $value){
			echo $key ." : ". $value . "<br>";
		}
	}
	echo "<br>";
	if ($cups = $this->session->userdata('dojo_cups')){
		foreach ($cups as $key => $value){
			echo $key ." : ". $value . "<br>";
		}
	}
}

?>

<br>

<?php

if ($this->input->post('submit_cart')){
	echo "<h3>Thank you For shopping with US</h3>";
}
?>

<form action="" method="post">
	<input type="text" name="name" placeholder="name">
	<input type="email" name="email" placeholder="email">
	<input type="text" name="card" placeholder="card">
	<input type="text" name="address" placeholder="address">
	<input type="submit" name="submit_cart">
</form>
</body>
</html>
