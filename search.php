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
        <?php 
          include('admin/db.php');
                                    if(isset($_GET['sear']))
                                    {
                                        $filtervalues = $_GET['search'];
                                        $query = "SELECT * FROM recipe WHERE status='1' and CONCAT(title) 
                                        LIKE '%$filtervalues%' ORDER BY id DESC";

                                      $query_run = mysqli_query($conn, $query);


                                        if(mysqli_num_rows($query_run) > 0)
                                        {
                                            foreach($query_run as $items)
                                            {
                                     ?>

                                      <div class="row">
                                        <div class="col-lg-4">
                                        <div class="card" style="width: 18rem;">
                                            <img src="./assets/recipes/recipe-2.jpeg" class="card-img-top" alt="...">
                                            <div class="card-body">
                                              <h5 class="card-title"><?php echo $items['title']; ?></h5>
                                              <p class="card-text"><?php echo $items['description']; ?></p>
                                              <a href="#" class="btn btn-green">Learn more</a>
                                            </div>
                                          </div>
                                        </div>
                                      </div>
                                    <?php
                                            }
                                        }
                                        else
                                        {
                                            ?>
                                                <tr>
                                                    <td colspan="4">No Product Found</td>
                                                </tr>
                                            <?php
                                        }
                                    }
                                ?>
<!---------end search-------------->
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