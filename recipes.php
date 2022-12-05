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

        <div class="recipes-list">

          <a href="single-recipe.html" class="recipe">
            <img
              src="./assets/recipes/recipe-1.jpeg"
              class="img recipe-img"
              alt=""
            />
            <h5>Carne Asada</h5>
            <p>Prep Time : 15min | Cooking Time : 5min</p>
          </a>

          <a href="single-recipe.html" class="recipe">
            <img
              src="./assets/recipes/recipe-2.jpeg"
              class="img recipe-img"
              alt=""
            />
            <h5>Beef Ribs</h5>
            <p>Prep Time : 15min | Cooking Time : 5min</p>
          </a>

          <a href="single-recipe.html" class="recipe">
            <img
              src="./assets/recipes/recipe-3.jpeg"
              class="img recipe-img"
              alt=""
            />
            <h5>Vegetable Soup</h5>
            <p>Prep Time : 15min | Cooking Time : 5min</p>
          </a>

          <a href="single-recipe.html" class="recipe">
            <img
              src="./assets/recipes/recipe-4.jpeg"
              class="img recipe-img"
              alt=""
            />
            <h5>Banana Pancakes</h5>
            <p>Prep Time : 15min | Cooking Time : 5min</p>
          </a>

        </div>
      </section>
    </main>

    <footer class="page-footer">
      <p>
        &copy; <span id="date"></span>
        <span class="footer-logo">Recipe Bangladesh</span> Built by Wazad Akhlak Choudhury
      </p>
    </footer>
    <script src="./js/app.js"></script>
  </body>
</html>