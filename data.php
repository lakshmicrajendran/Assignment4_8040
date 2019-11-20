<?php
$servername = "localhost";
$uname = "root";
$pwd= "";
$dbname = "assignment4";

$link = mysqli_connect($servername, $uname, $pwd, $dbname);
	if (!$link) 
	{
		die("Connection failed: ".$dbname.":".mysql_error());
	} 

$sellerName = $_POST['sname'];
$address=$_POST['address'];
$city = $_POST['city'];
$phoneNumber = $_POST['phnumber'];
$emailAddress = $_POST['email'];
$vehicleMake = $_POST['make'];
$vehicleModel = $_POST['model'];
$vehicleYear = $_POST['year'];
$url ="https://www.jdpower.com/Cars/";
$new;
$new =$url.$vehicleMake."/".$vehicleModel."/".$vehicleYear;

$sql = "INSERT INTO  vehicle_registration (sellerName,address,city,phoneNumber,emailAddress, vehicleMake, vehicleModel, vehicleYear, url)
VALUES('".$sellerName."','".$address."','".$city."','".$phoneNumber."','".$emailAddress."','".$vehicleMake."','".$vehicleModel."','".$vehicleYear."','".$new."')";

	if (!mysqli_query($link,$sql) )
	{
		echo 'Inserted error';		    
    }
	else 
	{
		echo "New record created successfully";
    }
		header("refresh:1; url=/backup/phpVehicle.php"); 
    
?>
