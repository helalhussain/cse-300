
<?php include('header.php'); ?>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
<style><?php include '../admin/assets/css/main.css' ?></style>

    <!-- end of nav -->
    <!-- main -->
    <main class="page">
      <!-- header -->
      <!-- <header class="hero">
        <div class="hero-container">
          <div class="hero-text">
          
          </div>
        </div>
      </header> -->
      <!-- end of header -->
      <section class="recipes-container">
        <!-- tag container -->
        <div class="tags-container">
          <h4>Ingredients</h4>
          <div class="tags-list">
            
          </div>
        </div>
        <!-- end of tag container -->
        <!-- recipes list -->
        <div class="recipes-list">
          <!-- single recipe -->
          <?php 
$recipe_query ="SELECT * FROM ingredints";
$run_recipe_query =mysqli_query($conn,$recipe_query);
while($recipe = mysqli_fetch_assoc($run_recipe_query)){
?>

          
          <div class="row">
             <div class="col-lg-4">
              <div class="card p-2"  style="width: 18rem; border:2px solid green!important;">
                   <img src="../admin/<?php echo $recipe['image']; ?>" class="card-img-top" alt="...">
                        <div class="card-body">
                         <h5 class="card-title"><?php echo $recipe['title']; ?><br> Price: <?php echo $recipe['price']; ?></h5>
                         <p class="card-text"><?php 
           echo substr($recipe['description'],0,30);?></p>

           <?php 
            echo"<a href='add-to-card.php?id=$recipe[id] user_id=$email' class=' btn btn-success'>Add to cart</a>";
            
                ?>
            <?php 
            echo"<a href='view_ingredient.php?id=$recipe[id] user_id=$email' class=' btn btn-success'>Details</a>";
            
                ?>             
                          

                     </div>
                   </div>
               </div>
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
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script>
      function checkdelete(){
      return confirm('Add cart ?');
         }
        </script>
<?php include("footer.php"); ?>