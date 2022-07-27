<html>
<head>
	<title>Add Subscriber</title>
</head>

<body>
<?php
// database connection 
include_once("config.php");

if(isset($_POST['Submit'])) {	
	$name = mysqli_real_escape_string($mysqli, $_POST['name']);
	$email = mysqli_real_escape_string($mysqli, $_POST['email']);
    $phone = mysqli_real_escape_string($mysqli, $_POST['phone']);
    $plan = mysqli_real_escape_string($mysqli, $_POST['plan']);
    $expiryDate = mysqli_real_escape_string($mysqli, $_POST['expiryDate']);

		//insert data to database	
		$result = mysqli_query($mysqli, "INSERT INTO users(name,email,phone,plan,expiryDate) VALUES('$name','$email','$phone','$plan','$expiryDate')");
		
		if($result){
            header("Location: index.php?msg=Congratulations! Data added successfully.");
        }
        else{
            echo "Failed" . mysqli_error($conn);
        }

}
?>
</body>
</html>
