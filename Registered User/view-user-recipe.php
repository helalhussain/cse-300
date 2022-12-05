<?php 
include("db.php");
$id =  $_GET['id'];
$recipe_query ="SELECT * FROM user_recipe where id='$id'";
$run_recipe_query =mysqli_query($conn,$recipe_query);
$data=mysqli_fetch_assoc($run_recipe_query);
$sql = "select * from tags";
$result = mysqli_query($conn,$sql);
include("header.php");
?>
    <main class="page">
      <div class="recipe-page">
        <section class="recipe-hero">
          <img
            src="../admin/<?php echo $data['image'];?>" width="500"
            
          />
          <article class="recipe-info">
            <h2><?php echo $data['title'];?></h2>
            <p>
              <?php echo $data['description'];?>
            </p>
            <div class="recipe-icons">
              <article>
                <i class="fas fa-clock"></i>
                <h5>prep time</h5>
                <!-- <p><?php echo $data['Prep Time'];?> minutes</p> -->
              </article>
              <article>
                <i class="far fa-clock"></i>
                <h5>cooking time</h5>
                <!-- <p><?php echo $data['Cooking Time'];?> minutes</p> -->
              </article>
              <article>
                <i class="fas fa-user-friends"></i>
                <h5>serving</h5>
                <!-- <p><?php echo $data['Serving'];?> People</p> -->
              </article>
            </div>
            <p class="recipe-tags">
              Tags :
              <a href="tag-template.html">
                <!-- <?php echo $data['tag'];?> -->
            </a>
            
              
            </p>
          </article>
        </section>
        
        <section class="recipe-content">
          <article class="first-column">
            
            <div>
			<h4>instructions</h4>
              <p class="single-instruction">
                <!-- <?php echo $data['instruction'];?> -->
                <br></p>
            </div>
            
            
         
          </article>
          <article class="second-column">
            <div>
              <h4>ingredients</h4>
              <p class="single-ingredient">
                <!-- <?php echo $data['ingredient'];?> -->
            </p>
             
            </div>
            
          </article>
        </section>
      </div>
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
