<html>
<head>
	<title>Add Subscriber</title>
</head>

<body>
<?php
//the database connection file
include_once("config.php");

if(isset($_POST['Submit'])) {	
	$name = mysqli_real_escape_string($mysqli, $_POST['name']);
	$email = mysqli_real_escape_string($mysqli, $_POST['email']);
    $phone = mysqli_real_escape_string($mysqli, $_POST['phone']);
    $plan = mysqli_real_escape_string($mysqli, $_POST['plan']);
    $expiryDate = mysqli_real_escape_string($mysqli, $_POST['expiryDate']);

		
	// checking empty fields
	if(empty($name) || empty($phone) || empty($email) || empty($plan) || empty($expiryDate)) {
				
		if(empty($name)) {
			echo "<font color='red'>Name field is empty.</font><br/>";
		}
		
		if(empty($phone)) {
			echo "<font color='red'>Phone field is empty.</font><br/>";
		}
		
		if(empty($email)) {
			echo "<font color='red'>Email field is empty.</font><br/>";
		}

        if(empty($plan)) {
			echo "<font color='red'>Plan field is empty.</font><br/>";
		}
        
        if(empty($expiryDate)) {
			echo "<font color='red'>Expiry Date field is empty.</font><br/>";
		}
        
		echo "<br/><a href='javascript:self.history.back();'>Go Back</a>";
	} else { 
			
		//insert data to database	
		$result = mysqli_query($mysqli, "INSERT INTO users(name,email,phone,plan,expiryDate) VALUES('$name','$email','$phone','$plan','$expiryDate')");
		
		if($result){
            header("Location: index.php?msg=Congratulations! Data added successfully.");
        }
        else{
            echo "Failed" . mysqli_error($conn);
        }

	}
}
?>
</body>
</html>
