
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
<div class="row">


          <?php 
		  include 'Registered User/db.php';
$recipe_query ="SELECT * FROM books";
$run_recipe_query =mysqli_query($conn,$recipe_query);
while($recipe = mysqli_fetch_assoc($run_recipe_query)){
?>
<div class="col-lg-4">
            <h5 style="color:green;"> <?php echo $recipe['id'];?>: <?php echo $recipe['title'];?></h5>
            <embed type="application/pdf" src="admin/pdf/<?php echo $recipe['pdf']; ?>" height="300" width="300"></td>
            <br/>
</div>

<?php }?>
</div>
<br/>

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
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.5/dist/umd/popper.min.js" integrity="sha384-Xe+8cL9oJa6tN/veChSP7q+mnSPaj5Bcu9mPX5F5xIGE0DVittaqT5lorf0EI7Vk" crossorigin="anonymous"></script>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.min.js" integrity="sha384-kjU+l4N0Yf4ZOJErLsIcvOU2qSb74wXpOhqTvwVx3OElZRweTnQ6d31fXEoRD1Jy" crossorigin="anonymous"></script>

  </body>
</html>
