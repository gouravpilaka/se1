<?php
header("Content-Type:application");
require "data.php";


if(!empty($_GET['name']))
{
	$name=$_GET['name'];
	$price = get_price($name);

	if(empty($price))
	{
		response(NULL);
	}	
	else
	{
		echo "<html><center><h2>$name's cost is: $price $</h2></center></html>";
		
	}	
}
else
{
	response(NULL);
}

function response($data)
{
	header("HTTP/1.1 ");
	
	echo "<b>$data </b>";
}

?>

<html>
<head>
<title>Gary's Seasoning</title>
</head>
<style>
body {
  	background-image: url('19.jpeg');
  	background-repeat: no-repeat;
  	background-attachment: fixed;
  	background-size: cover;
	}
h1{
	color: white;
	text-shadow: 0 0 3px brown, 0 0 10px black;
	}

</style>
<body>
<center><br>
<form>

<label for="cars">Choose a product:</label>
  <select id="cars" name="name">
    <option value="rub">rub</option>
    <option value="clove">clove</option>
    <option value="chilli">chilli</option>
    </select>
<input type="submit">
</form>
<button type="button">Buy this product</button>
</br>
</br>
<input type="button" value="Back" onclick="history.back()">
</center>
</body>
</html>
