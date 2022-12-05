<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Tags</title>
    <!-- favicon -->
    <link rel="shortcut icon" href="./assets/favicon.ico" type="image/x-icon" />
    <!-- normalize -->
    <link rel="stylesheet" href="normalize.css" />
    <!-- font-awesome -->
    <link
      rel="stylesheet"
      href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.14.0/css/all.min.css"
    />
    <!-- main css -->
    <link rel="stylesheet" href="admin/assets/css/main.css" />
  </head>
  <body>
    <!-- nav  -->
    <?php include('header.php');  ?>
    <!-- end of nav -->
    <main class="page">
         <section class="tags-wrapper">
          <!-- single tag -->
              <a href="tag-template.html" class="tag">
                <h5>Meat</h5>
                <p>1 recipe</p>
              </a>
            <!-- end of single tag -->
          <!-- single tag -->
              <a href="tag-template.html" class="tag">
                <h5>breakfast</h5>
                <p>2 recipe</p>
              </a>
            <!-- end of single tag -->
          <!-- single tag -->
              <a href="tag-template.html" class="tag">
                <h5>Veggies</h5>
                <p>3 recipe</p>
              </a>
            <!-- end of single tag -->
          <!-- single tag -->
              <a href="tag-template.html" class="tag">
                <h5>dinner</h5>
                <p>4 recipe</p>
              </a>
            <!-- end of single tag -->
          <!-- single tag -->
              <a href="tag-template.html" class="tag">
                <h5>Lunch</h5>
                <p>1 recipe</p>
              </a>
            <!-- end of single tag -->
        </section>
    </main>
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
