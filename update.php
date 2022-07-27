<?php
//  including the database connection file  
include_once("config.php");

if(isset($_POST['update']))
{	
	$id = mysqli_real_escape_string($mysqli, $_POST['id']);
	$name = mysqli_real_escape_string($mysqli, $_POST['name']);
	$email = mysqli_real_escape_string($mysqli, $_POST['email']);
    $phone = mysqli_real_escape_string($mysqli, $_POST['phone']);
    $plan = mysqli_real_escape_string($mysqli, $_POST['plan']);
    $expiryDate = mysqli_real_escape_string($mysqli, $_POST['expiryDate']);
	
		// updating the data
		$result = mysqli_query($mysqli, "UPDATE users SET name='$name',email='$email',phone='$phone',plan='$plan',expiryDate='$expiryDate' WHERE id=$id");
		
		// go to homepage
        if($result){
            header("Location: index.php?msg=Congratulations! Data updated successfully.");
        }
        else{
            echo "Failed" . mysqli_error($conn);
        }

}
?>
<?php
// getting id from url
$id = $_GET['id'];

// select data id
$result = mysqli_query($mysqli, "SELECT * FROM users WHERE id=$id");


while($res = mysqli_fetch_array($result))
{
	$name = $res['name'];
	$email = $res['email'];
    $phone = $res['phone'];
    $plan = $res['plan'];
    $expiryDate = $res['expiryDate'];
}
?>
<html>
<head>
  <!-- CSS only -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
	<title>Update Data</title>
</head>

<body>

    <!-- Navbar -->
    <nav class="navbar navbar-expand-lg bg-light">
        <div class="container-fluid mx-5">
            <a class="navbar-brand" href="index.php">EduLab</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup"
                aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
                <div class="navbar-nav ms-auto">
                    <a class="nav-link active" aria-current="page" href="index.php">Home</a>
                    <a class="nav-link" href="add-item.html">Add Subscriber</a>

                </div>
            </div>
        </div>
    </nav>

    <!--  Update Form-->

<div class="w-50 mx-auto mb-3">
        <h1 class="text-center mb-5 mt-3">Update Subscriber</h1>

        <form name="form1" method="post" action="update.php">

            <div class="form-outline mb-1">
                <label class="form-label" for="name">Name</label>
                <input type="text" id="name" name="name" value="<?php echo $name;?>" class="form-control form-control-md" required />
            </div>

            <div class="form-outline mb-1">
                <label class="form-label" for="email">Your Email</label>
                <input type="email" id="email" name="email" value="<?php echo $email;?>" class="form-control form-control-md" required />
            </div>

            <div class="form-outline mb-1">
                <label class="form-label" for="phone">Your Phone</label>
                <input type="tel" id="phone" name="phone" value="<?php echo $phone;?>" class="form-control form-control-md" required />
            </div>

            <div class="form-outline mb-1">
                <label class="form-label" for="plan">Plan</label>
                <select class="form-select" name="plan" aria-label="Default select example">
                    <option selected><?php echo $plan;?></option>
                    <option>Basic</option>
                    <option>Standard</option>
                    <option>Premium</option>
                </select>
                <div class="form-text">Select your plan from the dropdown.</div>

            </div>

            <div class="form-outline mb-3">
                <label class="form-label" for="expiryDate">Expiry Date</label>
                <input type="date" id="expiry" name="expiryDate" value="<?php echo $expiryDate;?>" class="form-control form-control-md" required />
            </div>

            <input type="hidden" name="id" value="<?php echo $_GET['id'];?>">

            <div class="d-flex justify-content-center">
                <input class="btn btn-success" type="submit" name="update" value="Update">
            </div>

        </form>

    </div>


</body>
</html>
