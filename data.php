<?php

function get_price($name)
{
	$products = [
		"chilli"=>43,
		"clove"=>27,
		"rub"=>57		
	];
	
	foreach($products as $product=>$price)
	{
		if($product==$name)
		{
			return $price;
			break;
		}
	}
}

?>

