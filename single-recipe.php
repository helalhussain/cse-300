<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Single Recipe</title>
    
    <link rel="shortcut icon" href="./assets/favicon.ico" type="image/x-icon" />
    
    <link rel="stylesheet" href="./css/normalize.css" />
    
    <link
      rel="stylesheet"
      href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.14.0/css/all.min.css"
    />
   
    <link rel="stylesheet" href="./css/main.css" />
  </head>
  <body>
   
  <?php include('header.php');  ?>
    
    <main class="page">
      <div class="recipe-page">
        <section class="recipe-hero">
          <img
            src="./assets/recipes/recipe-4.jpeg"
            class="img recipe-hero-img"
          />
          <article class="recipe-info">
            <h2>Banana Pancakes</h2>
            <p>
              These Fluffy Banana Pancakes are so easy to whip up, you won't have an excuse to skip breakfast in the mornings.<br>
			 <b>1.</b>In a bowl, whisk together flour, baking soda, baking powder, cinnamon, and salt.<br>
			 <b>2.</b>In another bowl, mash bananas. Add eggs, non-dairy milk, and vanilla extract. Mix until combined.<br>
			 <b>3.</b>Add dry ingredients to wet and mix until just combined, do not over mix.<br>
			 <b>4.</b>Heat a non-stick skillet over medium heat. Scoop 1/4 cup of batter to skillet, making a pancake shape. Cook pancakes for 2 to 3 minutes per side, or until lightly browned.<br>
			 <b>5.</b>Remove from skillet, top with maple syrup and sliced bananas, serve and enjoy!<br>
            </p>
            <div class="recipe-icons">
              <article>
                <i class="fas fa-clock"></i>
                <h5>prep time</h5>
                <p>30 minutes</p>
              </article>
              <article>
                <i class="far fa-clock"></i>
                <h5>cooking time</h5>
                <p>15 minutes</p>
              </article>
              <article>
                <i class="fas fa-user-friends"></i>
                <h5>serving</h5>
                <p>6 People</p>
              </article>
            </div>
            <p class="recipe-tags">
              Tags : <a href="tag-template.html">beef</a>
              <a href="tag-template.html">breakfast</a>
              <a href="tag-template.html">pancakes</a>
              <a href="tag-template.html">food</a>
            </p>
          </article>
        </section>
        
        <section class="recipe-content">
          <article>
            <h4>instructions</h4>
            
            <div class="single-instruction">
              <header>
                <p>step 1</p>
                <div></div>
              </header>
              <p>
               In a bowl, whisk together flour, baking soda, baking powder, cinnamon, and salt.<br>
              </p>
            </div>
            
            <div class="single-instruction">
              <header>
                <p>step 2</p>
                <div></div>
              </header>
              <p>
                In another bowl, mash bananas. Add eggs, non-dairy milk, and vanilla extract. Mix until combined.<br>
              </p>
            </div>
          
            <div class="single-instruction">
              <header>
                <p>step 3</p>
                <div></div>
              </header>
              <p>
                Add dry ingredients to wet and mix until just combined, do not over mix.<br>
              </p>
            </div>
         
          </article>
          <article class="second-column">
            <div>
              <h4>ingredients</h4>
              <p class="single-ingredient">1 1/2 cups dry pancake mix</p>
              <p class="single-ingredient">1/2 cup flax seed meal</p>
              <p class="single-ingredient">1 cup skim milk</p>
            </div>
            <div>
              <h4>tools</h4>
              <p class="single-tool">Hand Blender</p>
              <p class="single-tool">Large Heavy Pot With Lid</p>
              <p class="single-tool">Measuring Spoons</p>
              <p class="single-tool">Measuring Cups</p>
            </div>
          </article>
        </section>
      </div>
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
