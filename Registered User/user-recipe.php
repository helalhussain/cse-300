


<style><?php include '../admin/assets/css/main.css' ?></style>
 
 <?php include('header.php'); ?>
 
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
           <h4>Recipe</h4>
           <div class="tags-list">
             
           </div>
         </div>
         <!-- end of tag container -->
         <!-- recipes list -->
         <div class="recipes-list">
           <!-- single recipe -->
           <?php 
 $recipe_query ="SELECT * FROM user_recipe";
 $run_recipe_query =mysqli_query($conn,$recipe_query);
 while($recipe = mysqli_fetch_assoc($run_recipe_query)){
 ?>
           <a href="view-user-recipe.php?id=<?php echo $recipe['id'];?>" class="recipe">
             <img
               src="<?php echo $recipe['image']; ?>"
               class="img recipe-img"
               alt=""
             />
             <h5><?php echo $recipe['title']; ?></h5>
             
           </a>
 
 <?php }?>
           <!-- end of single recipe -->
    
           <!-- end of single recipe -->
         </div>
         <!-- end of recipes list -->
       </section>
     </main>
     <!-- end of main -->
     <!-- footer -->
     
 <?php include("footer.php"); ?>