<!DOCTYPE html>
<html lang="en">
  <head>

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
include("db.php");
$recipe_query ="SELECT * FROM job";
$run_recipe_query =mysqli_query($conn,$recipe_query);
while($circular = mysqli_fetch_assoc($run_recipe_query)){?>

<div class="col-lg-11">
    <div class="card my-2">
      <!-- <img class="card-img-top" src="holder.js/100x180/" alt="Title"> -->
      
      <div class="row">
        <div class="col-lg-9"><h4 class="text-center pt-2">Job Circular </h4></div>
        <div class="col-lg-3"><p class="pt-2" style="color:green">Date <?php echo $circular['date']; ?></p></div>
      </div>
      <div class="card-body">
        <h4 class="card-title" style="color:green"><?php echo $circular['title'] ?></h4>
        <p class="card-text"><?php echo $circular['description'] ?></p>
        <?php echo "<a href='apply_circular.php?id=$circular[id]' class='btn btn-green'>Apply now</a>"; ?>
      </div>
    </div>
    <!--End card--->
</div><br/>
<?php } ?>
 
</div>
</section>
    </main>
<br/><br/>
 <?php include("footer.php");?>