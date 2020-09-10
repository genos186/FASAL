<?php
	$con = mysqli_connect('127.0.0.1','root','');
	if (!$con) {
	 	echo "Not connected to server";
	 } 
	 if (!mysqli_select_db($con,'crop request')) {
	 	echo "No database found";
	 }
	 $type = $_POST['croptype'];
	 $name =$_POST['cropname']
	 $quantity =$_POST['qty'];
	 $sql = "INSERT INTO crops (Crop Type, Crop Name, Quantity) VALUES ('$type','$name','$quantity')";
	 if(!mysqli_query($con,$sql)){
	 	echo "Not inserted";
	 }
	 else{
	 	echo "Inserted";
	 }
	 header("refresh:1; url=requestcrop.html");

 ?>