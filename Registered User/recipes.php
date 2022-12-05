<?php include('header.php'); ?>

    <main class="page">
      <section class="recipes-container">

        <div class="tags-container">
          <h4>Recipe</h4>
          <div class="tags-list">
           
          </div>
        </div>

        <div class="recipes-list">
<?php 
$recipe_query ="SELECT * FROM recipe";
$run_recipe_query =mysqli_query($conn,$recipe_query);
while($recipe = mysqli_fetch_assoc($run_recipe_query)){
?>
          <a href="single-recipe.php?id=<?php echo $recipe['id'];?>" class="recipe">
            <img
              src="../admin/<?php echo $recipe['image']; ?>"
              class="img recipe-img"
              alt=""
            />
            <h5><?php echo $recipe['title']; ?></h5>
            <p><?php echo $recipe['ingredient'];?></p>
          </a>

<?php }?>
         

        </div>
      </section>
    </main>

    <footer class="page-footer">
      <p>
        &copy; <span id="date"></span>
        <span class="footer-logo">RecipeBD</span>
      </p>
    </footer>
    <script src="./js/app.js"></script>
  </body>
</html>