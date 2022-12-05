<?php include('header.php'); ?>
    <main class="page">
      <section class="recipes-container">

        <div class="tags-container">
          
          <div class="tags-list">
           
          </div>
        </div>

          <div class="col-lg-6 ">

          <div class="card p-3 bg-light">
            <h2 class="text-center text-white p-3" style="background:green;">Profile</h2>
              <div class="card-body">
                <h4 class="card-title text-success font-weight-bold"><?php echo $log_result['name']; ?></h4>
                <h6 class="card-text"><strong>Email:</strong> <?php echo $log_result['email']; ?></h6>
                <h6 class="card-text"><strong>Number:</strong> <?php echo $log_result['number']; ?></h6>
                <h6 class="card-text"><strong>Type: </strong><?php echo $log_result['usertype']; ?></h6><br/>
                <a href="edit-password.php" class="btn btn-green font-weight-bold">Edit</a>
                <a href="logout.php" class="btn btn-danger font-weight-bold">LOGOUT</a>
              </div>
            </div>
          </div>

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
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.5/dist/umd/popper.min.js" integrity="sha384-Xe+8cL9oJa6tN/veChSP7q+mnSPaj5Bcu9mPX5F5xIGE0DVittaqT5lorf0EI7Vk" crossorigin="anonymous"></script>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.min.js" integrity="sha384-kjU+l4N0Yf4ZOJErLsIcvOU2qSb74wXpOhqTvwVx3OElZRweTnQ6d31fXEoRD1Jy" crossorigin="anonymous"></script>

  </body>
</html>
