<!DOCTYPE html>
<html lang="en">
  <head>
  <title>RecipeBD</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>

<!----------->
<meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css">
  <script src="https://cdn.jsdelivr.net/npm/jquery@3.6.0/dist/jquery.slim.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.bundle.min.js"></script>

  <!--------------->

 
    <link rel="shortcut icon" href="../assets/favicon.ico" type="image/x-icon" />

    <link rel="stylesheet" href="../normalize.css" />
	

    <link
      rel="stylesheet"
      href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.14.0/css/all.min.css"
    />

    <link rel="stylesheet" href="main.css" />
  </head>
  <body>

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
</nav>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

<?php 
include 'db.php';
$get= $_GET['id'];
$recipe_query ="SELECT * FROM recipenews WHERE id='$get'";
$run_recipe_query =mysqli_query($conn,$recipe_query);
$recipe = mysqli_fetch_assoc($run_recipe_query);

?>

<div class="container">
    <div class="card p-4">
    <div class="row">
      
      <div class="col-lg-6">
      <div class = "product-img">
								<img src = "../admin/<?php echo $recipe['image_1'];?>" s
                style="height:300px;width:400px;">
							</div>
      </div>
      <div class="col-lg-6">

      <div class="card-body">
    <h4 class="card-title"><?php echo $recipe['title']; ?></h4>
    <p class="card-text"><?php echo $recipe['description']; ?></p>
    
  </div>
     
      </div>
    </div>
    </div>
</div>
</body>
</html>