
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>RecipieBangladesh</title>
    <!-- favicon -->
    <link rel="shortcut icon" href="./assets/favicon.ico" type="image/x-icon" />


    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- Bootstrap CSS v5.2.0-beta1 -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css"  integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">

    <!-- normalize -->
    <link rel="stylesheet" href="./css/normalize.css" />
    <!-- font-awesome -->
    <link
      rel="stylesheet"
      href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.14.0/css/all.min.css"
    />
    <!-- main css -->
    <link rel="stylesheet" href="./css/main.css" />
  </head>
  <body>
    <style><?php include './admin/assets/css/main.css' ?></style>
    <!-- nav  -->

    <nav class="navbar navbar-expand-lg bg-light">
  <div class="container">
    <!-- <a class="navbar-brand" href="#">Navbar</a> -->
    <a href="index.php" class="nav-logo navbar-brand">
            Recipe<span>Bangladesh</span>
          </a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
 
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <a class="nav-link active fw-bold"aria-current="page" href="index.php">Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link fw-bold" href="#">Recipe</a>
        </li>


        <li class="nav-item">
        <a href="Login.php" class="nav-link text-white btn btn-green py-1 px-4"> Login </a>
        </li>
        <li class="nav-item">
        <a href="Registration.php" class="nav-link text-white btn btn-green py-1 px-4"> Registration </a>
        </li>
      </ul>
      <form action="search.php" method="GET" class="d-flex" role="search">
          <div class="input-group">
          <input type="text" class="form-control"  name="search" placeholder="Search"
          value="<?php if(isset($_GET['search'])){ echo $_GET['search']; } ?>"
          aria-label="Input group example" aria-describedby="btnGroupAddon2" required>
          <button type="submit" name="sear" class="btn btn-green input-group-text"  id="btnGroupAddon2"><i class="fa fa-search"></i></i></button>
          </div>
        </div>
      </form>
    </div>
  </div>
</nav>



    <script src="./js/app.js"></script>
        <!-- Bootstrap JavaScript Libraries -->
        <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.5/dist/umd/popper.min.js" integrity="sha384-Xe+8cL9oJa6tN/veChSP7q+mnSPaj5Bcu9mPX5F5xIGE0DVittaqT5lorf0EI7Vk" crossorigin="anonymous"></script>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.min.js" integrity="sha384-kjU+l4N0Yf4ZOJErLsIcvOU2qSb74wXpOhqTvwVx3OElZRweTnQ6d31fXEoRD1Jy" crossorigin="anonymous"></script>

  </body>
</html>

