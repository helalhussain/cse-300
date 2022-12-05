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
$recipe_query ="SELECT * FROM shows";
$run_recipe_query =mysqli_query($conn,$recipe_query);
while($fetch = mysqli_fetch_assoc($run_recipe_query)){?>

<div class="col-lg-11">
    <div class="cards my-2">
       <img class="card-img-top" src="../admin/<?php echo $fetch['image'] ?>" alt="Title">
      
      <div class="row">
        <div class="col-lg-8"><h4 class="text-center pt-2"> </h4></div>
        <div class="col-lg-4"><h5 class="pt-2 fw-bold text-success" style="n">
        Date <?php echo $fetch['date_show']; ?> <?php echo $fetch['time']; ?></h5></div>
      </div>
      <div class="card-body">
        <h4 class="card-title" style="color:green"><?php echo $fetch['title'] ?></h4>
        <p class="card-text"><?php echo $fetch['description'] ?></p>
        <!-- <?php echo "<a href='apply_circular.php?id=$fetch[id]' class='btn btn-green'>Apply now</a>"; ?> -->
      </div>
    </div>
    <!--End card--->
</div><hr/><br/><br/>
<?php } ?>
 
</div>
</section>
    </main>
<br/><br/>
 <?php include("footer.php");?>