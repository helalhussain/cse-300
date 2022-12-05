<?php
include('db.php');
@session_start();
error_reporting(0);
$email = $_SESSION['email'];
error_reporting(0);
if($email==true)
{

}else{
  header('location:../login.php');
}

$log_query ="SELECT * FROM users WHERE email='$email'";
$run_log_query =mysqli_query($conn,$log_query);
$log_result = mysqli_fetch_assoc($run_log_query);

?>


<!DOCTYPE html>
<html lang="en">
  <head>

  <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>RecipieBD</title>
    <!-- favicon -->
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- Bootstrap CSS v5.2.0-beta1 -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" 
     integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
    <!-- font-awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.14.0/css/all.min.css"/>
  <!--------------->


    <link rel="stylesheet" href="../normalize.css" />
	

    <link
      rel="stylesheet"
      href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.14.0/css/all.min.css"
    />

    <link rel="stylesheet" href="main.css" />
  </head>
  <body>

  <nav class="navbar navbar-expand-lg bg-light">
  <div class="container">
    <!-- <a class="navbar-brand" href="#">Navbar</a> -->
    <a href="index.php" class="nav-logo navbar-brand">
            Recipe<span>BD</span>
          </a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
 
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <a class="nav-link active fw-bold"aria-current="page" href="index.php">Home</a>
        </li>

        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle fw-bold" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            Recipe
          </a>
          <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
            <li><a class="dropdown-item" href="tags.php">Recipe</a></li>
            <li><a class="dropdown-item" href="foodview.php">Food News</a></li>
            <li><a class="dropdown-item" href="foodview.php">Tips & Tricks</a></li>
          </ul>
        </li>
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle fw-bold" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            All Menus
          </a>
          <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
            <li><a class="dropdown-item" href="tags.php">Tag</a></li>
            <li><a class="dropdown-item" href="book.php">Recipe Book</a></li>
            <li><a class="dropdown-item" href="chef.php">Chef</a></li>
            <li><a class="dropdown-item" href="category.php">Category</a></li>
            <li><a class="dropdown-item" href="ingredient.php">Ingredient</a></li>
            <li><a class="dropdown-item" href="Kitchen_tools.php">Kitchen Tools</a></li>
            <li><hr class="dropdown-divider"></li>
            <li><a class="dropdown-item" href="recipe-circular.php">Recipe Cicular</a></li>
            <li><a class="dropdown-item" href="user-recipe.php">User Recipe</a></li>
            <li><a class="dropdown-item" href="circular.php"> Cicular</a></li>
            <li><a class="dropdown-item" href="shows.php">Shows</a></li>
            <li><a class="dropdown-item" href="press.php">Press</a></li>
            <li><a class="dropdown-item" href="recipe-box.php">Recipe box</a></li>
          </ul>
        </li>

        <!-- <li class="nav-item">
        <a href="Login.php" class="nav-link text-white btn btn-green py-1 px-4"> Login </a>
        </li>
        <li class="nav-item">
        <a href="Registration.php" class="nav-link text-white btn btn-green py-1 px-4"> Registration </a>
        </li> -->
        <li class="nav-item dropdown mt-2">
            <h5><a href="gift-card.php" class="fw-bold nav-link ">Gift card</a></h5>
        </li>
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle fw-bold bg-white shadow" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
          <i class="fa fa-users"></i>
          </a>
          <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
            <li><a class="dropdown-item" href="../admin/include/overview.php">Overview</a></li>
            <li><a class="dropdown-item" href="../admin/index.php">Admin</a></li>
            <li><a class="dropdown-item" href="profile.php">Profile</a></li>
            <li><a class="dropdown-item" href="my-card.php"> Cart</a></li>
            <li><a class="dropdown-item" href="my-favorite.php">Favorite</a></li>
            <li><a class="dropdown-item" href="all_booking.php">Due Order</a></li>
            <li><a class="dropdown-item" href="all_order.php">Order Page</a></li>
            <li><hr class="dropdown-divider"></li>
            <li><a class="dropdown-item" href="Logout.php">Logout</a></li>
          </ul>
        </li>

      </ul>
      <form action="search.php" method="GET" class="d-flex" role="search">
          <div class="input-group">
          <input type="text" class="form-control"  name="search" placeholder="Search"
          value="<?php if(isset($_GET['search'])){ echo $_GET['search']; } ?>"
          aria-label="Input group example" aria-describedby="btnGroupAddon2" required>
          <button type="submit" name="sear" class="btn btn-green input-group-text"  id="btnGroupAddon2"><i class="fa fa-search"></i></i></button>
          </div>
        </div>
      </form>
    </div>
  </div>
</nav>

<!-- 
    <nav class="navbar">
      <div class="nav-center">
        <div class="nav-header">
          <a href="index.php" class="nav-logo">
            Recipe<span>BD</span>
          </a>
		  <button class="nav-btn btn">
            <i class="fas fa-align-justify"></i>
          </button>
        </div>
        <div class="nav-links" style ="font-size:26px;">
          <a href="index.php" class="nav-link"> home </a>
          <a href="tags.php" class="nav-link"> tags </a>
          <a href="category.php" class="nav-link"> categories </a>
          <a href="recipes.php" class="nav-link"> recipes </a>
		  <a href="about.php" class="nav-link"> about </a>
		  <a href="foodview.php" class="nav-link"> Food News </a>
          <div class="search">
	        	<div class="icon"></div>

	          	<div class="input">
		          	<input type="text" placeholder="Search..." id="mysearch">
		          </div>

	        	<span class="clear" onclick="document.getElementById('mysearch').value = ''"></span>
	  </div>
    
  </div>
  <div class=" dropdown">
    <button type="button" class="btn bg-white text-dark dropdown-toggle" data-toggle="dropdown">
      <i class="fa fa-users"></i>
    </button>
    <div class="dropdown-menu">
      <a class="dropdown-item" href="../admin/include/overview.php">Overview</a>
      <a class="dropdown-item" href="../admin/index.php">Dashboard</a>
      <a class="dropdown-item" href="Logout.php">Logout</a>
    </div>
  </div>
</nav> -->

    