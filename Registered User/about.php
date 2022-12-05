<?php include('header.php'); ?>

    <main class="page">
      <section class="about-page">
        <article>
          <h2>Who we are</h2>
          <p>
            Food brings people together; it encourages community, joy, laughter, and overall well-being. 
			Cooking is a universal experience that brings unique memories to everyone who partakes in it.

          </p>
          <p>
            Here at Recipe Bangladesh we want to share these special moments with you. We’re bringing you content filled with good food, mouthwatering presentation, and exciting execution. 
			In essence, we flaunt fantastic flavor and fearlessly fun food.
			Cooking isn’t always easy — that’s why we strive to offer simple (yet extraordinary) digital and community culinary education to spark an accomplished and passionate chef within everyone.<br>
			The Recipes blog offers a space for all to come and find unique recipes for any occasion. 
		    Recipe Bangladesh brings together a community of foodies eager to learn, share, and contribute to our vision.

          </p>
          <a href="contact.php" class="btn btn-green"> contact us</a>
        </article>

        <img
          src="./assets/about.jpeg"
          alt="Person Pouring Salt in Bowl"
          class="img about-img"
        />
      </section>
      <section class="featured-recipes">
        <h5 class="featured-title">Look At This Awesomeness!</h5>
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
