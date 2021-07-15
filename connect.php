<?php
	$firstName = $_POST['firstName'];
	$lastName = $_POST['lastName'];
	$gender = $_POST['phoneno'];
	$email = $_POST['emailid'];
	$password = $_POST['type'];
    $number = $_POST['city'];
	$number = $_POST['address'];
    $number = $_POST['detail'];

	// Database connection
	$conn = new mysqli('localhost','root','','test');
	if($conn->connect_error){
		echo "$conn->connect_error";
		die("Connection Failed : ". $conn->connect_error);
	} else {
		$stmt = $conn->prepare("insert into warehouse(firstName, lastName, phoneno, emailid, type, city, address, detail) values(?, ?, ?, ?, ?, ?, ?, ?)");
		$stmt->bind_param("ssisssss", $firstName, $lastName, $phoneno, $emailid, $type, $city, $address, $detail);
		$execval = $stmt->execute();
		echo $execval;
		echo "Registration successfully...";
		$stmt->close();
		$conn->close();
	}
?>