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
          <label for="" class="form-label fs-6">Title</label>
          <input type="text" class="form-control" name="title" id="" aria-describedby="helpId" placeholder="Title" required>
        </div>
        <div class="mb-3">
          <label for="" class="form-label fs-6">Description</label>
          <input type="text" class="form-control" name="description" id="" aria-describedby="helpId" placeholder="Description" required>
        </div>
        <div class="mb-3">
          <label for="" class="form-label fs-6">Recipe Image</label>
          <input class="form-control" type="file" name="uploadfile1"  required>

        </div>
        <button type="submit" name="apply" class="btn btn-green">Send</button>
        </form>
    </div>
    <!--End card--->

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<?php
		if(isset($_POST['apply'])){
			$title = $_POST['title'];
			$description = $_POST['description'];
$user_id = $log_result['id'];
            $filename1 = $_FILES['uploadfile1']['name'];
            $tempname1 =$_FILES['uploadfile1']['tmp_name'];
            $image_1 ="../admin/image/user_recipe/".$filename1;
            move_uploaded_file($tempname1,$image_1);

            move_uploaded_file($pdf_tem_loc,$pdf_store);
            $date = date("Y/m/d");
            $status = 1;
					$sql = "INSERT INTO user_recipe VALUES(NULL,'','$get_id','$title','$description','$image_1','$status','$date')";
            $query = mysqli_query($conn,$sql);
          echo "<script>alert('Recipe send successful');</script>";

		    // header("location:add-tag.php");
								



			
		}

	?>
</div><br/>

 
</div>
</section>
    </main>
<br/><br/>
<?php include("footer.php"); ?>