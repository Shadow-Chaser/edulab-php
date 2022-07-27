<?php
// the database connection file
include_once("config.php");


$result = mysqli_query($mysqli, "SELECT * FROM users ORDER BY id DESC");
?>

<html>
<head>	
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
	<title>Homepage</title>
</head>

<body>
    <!-- Navbar -->
    <nav class="navbar navbar-expand-lg bg-light">
        <div class="container-fluid">
            <a class="navbar-brand" href="index.php">EduLab</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup"
                aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
                <div class="navbar-nav">
                    <a class="nav-link active" aria-current="page" href="index.php">Home</a>
                    <a class="nav-link" href="add-item.html">Add Subscriber</a>

                </div>
            </div>
        </div>
    </nav>

    <!-- Success Status -->

    <?php 
            if(isset($_GET['msg'])){
                $msg = $_GET['msg'];
                echo '<div class="w-75 mt-4 mx-auto">
                <div class="alert alert-success alert-dismissible fade show" role="alert">
                '.$msg.'
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
              </div>
              </div>';
            }
        ?>

    <!-- Displaying Data -->
    <div class="w-75 mx-auto table-responsive">
      <h1 class="text-center mb-4 mt-4">Subscriber List</h1>
      <table class="table table-striped ">
    <thead>
      <tr>
        <th>ID</th>
        <th>Name</th>
        <th>Email</th>
        <th>Phone</th>
        <th>Plan</th>
        <th>Expiry Date</th>
        <th>Actions</th>
      </tr>
    </thead>

    <tbody>
      <?php 
    while($res = mysqli_fetch_array($result)) { 		
      echo "<tr>";
      echo "<td>".$res['id']."</td>";
      echo "<td>".$res['name']."</td>";
      echo "<td>".$res['email']."</td>";
      echo "<td>".$res['phone']."</td>";
      echo "<td>".$res['plan']."</td>";	
      echo "<td>".$res['expiryDate']."</td>";

      echo "<td><a href=\"update.php?id=$res[id]\">Edit</a> | <a href=\"delete.php?id=$res[id]\" onClick=\"return confirm('Are you sure you want to delete?')\">Delete</a></td>";		
    }
    ?>
    </tbody>
  </table>
    </div>

	</table>
</body>
<!-- JavaScript Bundle with Popper -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-A3rJD856KowSb7dwlZdYEkO39Gagi7vIsF0jrRAoQmDKKtQBHUuLZ9AsSv4jD4Xa" crossorigin="anonymous"></script>
</html>
