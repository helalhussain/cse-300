


<style><?php include '../admin/assets/css/main.css' ?></style>
 
 <?php include('header.php'); ?>
 
     <!-- end of nav -->
     <!-- main -->
     <main class="page">
       <!-- header -->
       <header class="hero">
         <div class="hero-container">
          
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
 $recipe_query ="SELECT * FROM recipe_box";
 $run_recipe_query =mysqli_query($conn,$recipe_query);
 while($recipe = mysqli_fetch_assoc($run_recipe_query)){
 ?>
          <div class="card p-2">
          <a href="view-recipe-box.php?id=<?php echo $recipe['id'];?>" class="recipe">
             <img
               src="../admin/<?php echo $recipe['image_1']; ?>"
               class="img recipe-img"
               alt=""
             />
             <h5><?php echo $recipe['title']; ?></h5><br/>
             <button class="btn btn-info">View</button>
           </a>
          </div>
 
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