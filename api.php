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
		echo "<html><center><h2> $price $</h2></center></html>";
		
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
ton" value="Back" onclick="history.back()">
</center>
</body>
</html>
