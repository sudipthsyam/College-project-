
<?php
  $mgapp_number = $_POST['mgapp_number'];
  $name = $_POST['name'];
  $email = $_POST['email'];
  $phone = $_POST['phone'];
  $address = $_POST['address'];
  $aadhaar = $_POST['aadhaar'];
  $religion = $_POST['religion'];
  $gender = $_POST['gender'];

	// Database connection
	$con = new mysqli('localhost','root','','application_data');
	if($con->connect_error){
		echo "$con->connect_error";
		die("Connection Failed : ". $con->connect_error);
	} else {
		$query = $con->prepare("insert into form(mgapp_number,name,email,phone,address,aadhaar,religion,gender) values(?, ?, ?, ?, ?, ?, ?, ?)");
		$query->bind_param("issisiss", $mgapp_number, $name, $email, $phone, $address, $aadhaar, $religion, $gender);
		$execval = $query->execute();
		echo $execval;
		echo '<script>alert("Welcome to Geeks for Geeks")</script>';
			header("Location: rank.php");

		echo "Registration successfully...";
		$query->close();
  $conn->close();
  // Redirect browser
  


  


 
exit;

 }

 

