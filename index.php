<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>RecipieBangladesh</title>
    <!-- favicon -->
    <link rel="shortcut icon" href="./assets/favicon.ico" type="image/x-icon" />

    <!-- normalize -->
    <link rel="stylesheet" href="./css/normalize.css" />
    <!-- font-awesome -->
    <link
      rel="stylesheet"
      href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.14.0/css/all.min.css"
    />
    <!-- main css -->
    <link rel="stylesheet" href="./css/main.css" />
  </head>
  <body>
    <style><?php include './admin/assets/css/main.css' ?></style>
    <!-- nav  -->
    <?php include('header.php');  ?>

 
    <!-- end of nav -->
    <!-- main -->
    <main class="page">
      <!-- header -->
      <header class="hero">
        <div class="hero-container">
          <div class="hero-text">
            <h1>Recipes from Bangladesh</h1>
            <h4>Hello Foodie!</h4>
          </div>
        </div>
      </header>
      <!-- end of header -->
      <section class="recipes-container">
        <!-- tag container -->
        <div class="tags-container">
          <h4>recipes</h4>
          <div class="tags-list">
            <a href="tag-template.html">Meat (1)</a>
            <a href="tag-template.html">Breakfast (2)</a>
            <a href="tag-template.html">Veggies (3)</a>
            <a href="tag-template.html">Lunch (4)</a>
          </div>
        </div>
        <!-- end of tag container -->
        <!-- recipes list -->
        <div class="recipes-list">
          <!-- single recipe -->
          <?php 
		  include 'Registered User/db.php';
$recipe_query ="SELECT * FROM recipe";
$run_recipe_query =mysqli_query($conn,$recipe_query);
while($recipe = mysqli_fetch_assoc($run_recipe_query)){
?>
          <a href="single-recipe.php?id=<?php echo $recipe['id'];?>" class="recipe">
            <img
              src="admin/<?php echo $recipe['image']; ?>"
              class="img recipe-img"
              alt=""
            />
            <h5><?php echo $recipe['title']; ?></h5>
            <p><?php echo $recipe['description'];?></p>
          </a>

<?php }?>
          <!-- end of single recipe -->
   
          <!-- end of single recipe -->
        </div>
      </section>
    </main>
    <!-- end of main -->
    <!-- footer -->
    <footer class="page-footer">
      <p>
        &copy; <span id="date"></span>
        <span class="footer-logo">Recipe Bangladesh</span> Built by Wazad Akhlak Choudhury
      </p>
    </footer>
    <script src="./js/app.js"></script>
  </body>
</html>
