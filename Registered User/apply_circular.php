<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Recipes</title>
 
    <link rel="shortcut icon" href="./assets/favicon.ico" type="image/x-icon" />

    <link rel="stylesheet" href="./css/normalize.css" />

    <link
      rel="stylesheet"
      href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.14.0/css/all.min.css"
    />
    <link
      rel="stylesheet"
      href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.14.0/css/all.min.css"
    />
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS v5.2.0-beta1 -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css"  integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">

    <link rel="stylesheet" href="admin/assets/css/main.css" />
  </head>
  <body>

  <?php include('header.php');  ?>

    <main class="page">
<section class="recipes-container">

<div class="tags-container">
  <h4>recipes</h4>
  <div class="tags-list">
    <a href="tag-template.html">Beef (1)</a>
    <a href="tag-template.html">Breakfast (2)</a>
    <a href="tag-template.html">Carrots (3)</a>
    <a href="tag-template.html">Food (4)</a>
  </div>
</div>

<div class="row">


<?php 

$get_id = $_GET['id'];

include("db.php");
$recipe_query ="SELECT * FROM job";
$run_recipe_query =mysqli_query($conn,$recipe_query);
$circular = mysqli_fetch_assoc($run_recipe_query);?>

<div class="col-lg-11">
    <div class="card p-5">
        <form method="POST" enctype="multipart/form-data">
        <div class="mb-3">
          <label for="" class="form-label fs-6">Name</label>
          <input type="text" class="form-control" name="name" id="" aria-describedby="helpId" placeholder="Name" required>
        </div>
        <div class="mb-3">
          <label for="" class="form-label fs-6">Email</label>
          <input type="text" class="form-control" name="email" id="" aria-describedby="helpId" placeholder="Email" required>
        </div>
        <div class="mb-3">
          <label for="" class="form-label fs-6">Address</label>
          <input type="text" class="form-control" name="address" id="" aria-describedby="helpId" placeholder="Address" required>
        </div>
        <div class="mb-3">
          <label for="" class="form-label fs-6">Contact Number</label>
          <input type="text" class="form-control" name="contact" id="" aria-describedby="helpId" placeholder="Contact number" required>
        </div>
        <div class="mb-3">
          <label for="" class="form-label fs-6">Upload CV</label>
          <input class="form-control" type="file" name="pdf"  required>

        </div>
        <button type="submit" name="apply" class="btn btn-green">Apply</button>
        </form>
    </div>
    <!--End card--->

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<?php
		if(isset($_POST['apply'])){
			$name = $_POST['name'];
			$email = $_POST['email'];
			$address = $_POST['address'];
			$contact = $_POST['contact'];
            $pdf=$_FILES['pdf']['name'];
            $pdf_type=$_FILES['pdf']['type'];
            $pdf_size=$_FILES['pdf']['size'];
            $pdf_tem_loc=$_FILES['pdf']['tmp_name'];
            $pdf_store="images/cv/".$pdf; 

            move_uploaded_file($pdf_tem_loc,$pdf_store);
            $date = date("Y/m/d");
					$sql = "INSERT INTO apply_circular VALUES(NULL,'$get_id','$name','$email','$address','$contact','$pdf','$date')";
            $query = mysqli_query($conn,$sql);
          echo "<script>alert('apply successful');</script>";

		    // header("location:add-tag.php");
								



			
		}

	?>
</div><br/>

 
</div>
</section>
    </main>
<br/><br/>
<?php include("footer.php"); ?>