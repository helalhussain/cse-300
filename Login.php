<html>  
<head>  
  <title>RecipeBD</title>
  <meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

	<!-- Bootstrap CSS v5.2.0-beta1 -->
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css"  integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">

  </head>
 


<body style="background-color:ghostwhite">  

<div class="row">
	<div class="col-lg-4 text-end pt-5"><a href="index.php" class="btn btn-dark text-center text-white">Back</a></div>
	<div class="col-lg-4 pt-5">
	<div class="card p-5">
		<form name="f1" onsubmit = "return validation()" method="POST">
			<h1 class="text-center text-dark">LOG IN</h1>
			<div class="mb-3">
				<label for="exampleInputEmail1" class="form-label">Email</label>
				<input type="email" class="form-control" placeholder="Enter Email" name="email" required>
			</div>
			<div class="mb-3">
				<label for="exampleInputEmail1" class="form-label">Password</label>
				<input type="password" class="form-control" placeholder="Enter Email" name="pass" required>
			</div>
			<button type="submit" class="btn btn-dark" name="Login"><b>Login</b></button><br/>
			<span class="">Not Registered? </span><a href="registration.php">Click Here</a>
		</form>
		</div>

	</div>
	<div class="col-lg-4"></div>
</div>


       
<?php
error_reporting(0);
session_start();
include('admin/db.php');

if(isset($_POST['Login'])){
	$email = $_POST['email'];
	$pass= $_POST['pass'];

			
			$query ="SELECT * FROM users WHERE email='$email' && password='$pass'";
			$data =mysqli_query($conn,$query);
			$total =mysqli_num_rows($data);
			$tot =mysqli_fetch_assoc($data);
					echo $total['status'];
			if($total==1)
				{
					
					if($tot['status']=="1"){
						$_SESSION['email']=$email;
						$_SESSION['user_id']=$tot['id'];
						if ($tot ['usertype']=="admin" or $tot ['usertype']=='general' or $tot ['usertype']=='StoreKeeper'){
							
							header("location:Registered User/index.php");
						}
					
					//header("location:recipes.php");
		
					}else{
						echo '<script>alert("Your account is blocked")</script>';
					}

				}
			else{
       echo '<script>alert("Email or password wrong")</script>';
				

			}
		
	}

 ?>

<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.5/dist/umd/popper.min.js" integrity="sha384-Xe+8cL9oJa6tN/veChSP7q+mnSPaj5Bcu9mPX5F5xIGE0DVittaqT5lorf0EI7Vk" crossorigin="anonymous"></script>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.min.js" integrity="sha384-kjU+l4N0Yf4ZOJErLsIcvOU2qSb74wXpOhqTvwVx3OElZRweTnQ6d31fXEoRD1Jy" crossorigin="anonymous"></script>

</body>     
</html>  
