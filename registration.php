<html>  
<head>  
    <title>Registration</title> 
    <meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

	<!-- Bootstrap CSS v5.2.0-beta1 -->
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css"  integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">

    <link rel="shortcut icon" href="./assets/favicon.ico" type="image/x-icon" />
</head> 

<body style="background-color:ghostwhite"> 	
<div class="row pt-3">
	<div class="col-lg-4 text-end pt-5"><a href="index.php" class="btn btn-dark text-center text-white">Back</a></div>
	<div class="col-lg-4 pt-5">
	<div class="card p-5">
		<form name="f1" onsubmit = "return validation()" method="POST">
			<h1 class="text-center text-dark">SIGN UP</h1>
			<div class="mb-3">
				<label for="exampleInputEmail1" class="form-label">Name</label>
				<input type="text" class="form-control"  placeholder="Enter Name" name="name" required>
			</div>
      <div class="mb-3">
				<label for="exampleInputEmail1" class="form-label">Email</label>
				<input type="email" class="form-control"  placeholder="Enter Email" name="email" id="email" required>
			</div>
      <div class="mb-3">
				<User for="exampleInputEmail1" class="form-label">User Type</label>
          <select name="usertype" class="form-control">
            <option value="StoreKeeper">StoreKeeper</option>
            <option value="general">General</option>
          </select>
			</div>
			<div class="mb-3">
				<label for="exampleInputEmail1" class="form-label">Password</label>
				<input type="password" class="form-control" placeholder="Enter Password" name="pass" id="pass" required>
			</div>
      <div class="mb-3">
				<label for="exampleInputEmail1" class="form-label">Mobile</label>
        <input type="password" class="form-control" placeholder="Enter Number" name="number" id="number" required>
			</div>
			<button type="submit" class="btn btn-dark" name="register"><b>SIGN UP</b></button><br/>
			<span class="">Login? </span><a href="Login.php">Click Here</a>
		</form>
		</div>

	</div>
	<div class="col-lg-4"></div>
</div>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<?php 
include('db.php');
if(isset($_POST['register'])){
  $name =$_POST['name'];
  $password =$_POST['pass'];
  $usertype =$_POST['usertype'];
  $email = $_POST['email'];
  $number = $_POST['number'];
$status = "1";
  $reg_query = "INSERT INTO users VALUES(NULL,'$name', '$usertype', '$email','$number','$password','$status')";
  $query_run =mysqli_query($conn,$reg_query);
  if($query_run){
    echo "<script>alert('Account Created');</script>";
  }
  
}

?>

<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.5/dist/umd/popper.min.js" integrity="sha384-Xe+8cL9oJa6tN/veChSP7q+mnSPaj5Bcu9mPX5F5xIGE0DVittaqT5lorf0EI7Vk" crossorigin="anonymous"></script>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.min.js" integrity="sha384-kjU+l4N0Yf4ZOJErLsIcvOU2qSb74wXpOhqTvwVx3OElZRweTnQ6d31fXEoRD1Jy" crossorigin="anonymous"></script>

</body>     
</html>  
