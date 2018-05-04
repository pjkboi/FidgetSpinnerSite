<html>
<head>
<title>
</title>
</head>
<body>

<?php

	function validation()
	{
		$valid = true;
		$name = $_POST["name"];
		$address = $_POST["address"];
		$city = $_POST["city"];
		$province = $_POST["province"];
		$postalCode = $_POST["postalCode"];
		$quantity = $_POST["quantity"];

		
	
	//This part is where validation for PHP
		if(is_null($name) or $name == '' or strlen($name) <= 3)
		{
			echo "Name must be greater then 3 characters<br>";
			$valid = false;
		}
		if(is_null($address) or $address == '')
		{
			echo "Must have an address<br>";
			$valid = false;
		}
		if(is_null($city) or $city == '')
		{
			echo "Please enter the city you live in<br>";
			$valid = false;
		}
		if(is_null($province) or $province == '')
		{
			echo "Please Enter the Province<br>";
			$valid = false;
		}
		if(is_null($postalCode) or $postalCode == '')
		{
			echo "Field must have postal code<br>";
			$valid = false;
		}
		if (is_null ($quantity) or !is_numeric($quantity) or $quantity <= 0 )
		{
			echo"quantity must be greater then 0, please buy something<br>";
			$valid = false;
		}
		
		if($valid == true){
			
			echo "<br>";
		}
		elseif($valid == false)
		{
			echo "invalid input";
		}
		return $valid;
	}

	
	$name = $_POST["name"];
	$address = $_POST["address"];
	$city = $_POST["city"];
	$province = $_POST["province"];
	$postalCode = $_POST["postalCode"];
	$quantity = $_POST["quantity"];
	if(validation())
	{
		echo "Shipping To<br>";
		echo $name . "<br>";
		echo $address . "<br>";
		echo $city . "," . $province . "<br>";
		echo $postalCode . "<br>";

		echo "<br>Order Information :<br>";
		
		$tax = 1.0;
		$subTotal = 1;
		$price = 10;
		$subTotal = $price * $quantity;
		$numDay = 1;
		//this is the number of second in a day...
		$devDay = 86400;
		
		
	$taxesProv = array (
		"Ontario" => 1.13,
		"Alberta" => 1.05,
		"Manitoba" => 1.08,
		"British Columbia" => 1.07
	);
		
			if($province == "Ontario")
			{
				$tax = $taxesProv["Ontario"];
				
			}
			elseif($province == "Alberta")
			{
				$tax = $taxesProv["Alberta"];
			}
			elseif($province == "Manitoba")
			{
				$tax = $taxesProv["Manitoba"];
			}
			elseif($province == "British Columbia")
			{
				$tax = $taxesProv["British Columbia"];
			}
// this part is starting the subtotal and shipment


			if ($subTotal > 0 and $subTotal <= 25)
			{
				$shipment = 3;
				$numDay = 1;
			}
			elseif($subTotal > 25  and $subTotal <= 50)
			{
				$shipment = 4;
				$numDay = 1;
			}
			elseif($subTotal > 50  and $subTotal <= 75)
			{
				$shipment = 5;
				$numDay = 3;
			}
			else
			{
				$shipment = 6;
				$numDay = 4;
			}
			
			
			echo ("<br>Subtotal : $".$subTotal);
			echo ("<br>Tax rate : " . (($tax - 1) * 100)  . "%");
			echo"<br>Shipping Cost : $". $shipment;
			echo "<br>Total: $". ($subTotal * $tax + $shipment);			
			$dateDilUpon = $devDay * $numDay;
			$delDate = date("d-m-y", time() + $dateDilUpon); 
			echo "<br>your date of arrival is " . $delDate;
			
	}

?>


</body>
</html>