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


<center><br>
ton" value="Back" onclick="history.back()">
</center>
</body>
</html>
