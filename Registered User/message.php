<!doctype html>
<html lang="en">
  <head>

    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
  </head>
  <body>

<?php include('header.php'); ?>

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

        <div class="profile">

         <div class="row">
             <div class="col-lg-1"></div>
             <div class="col-lg-10">
             <div class="card p-3 bg-light">
             <table class="table bg-white " style="font-size: 13px;">
            <thead class="bg-white">
                <tr>
                    <th scope="col">ID </th>
                    <th scope="col">Email </th>
             
                    <th scope="col">Message </th>
                 

                </tr>
            </thead>

            <tbody class="text-secondary bg-light">

                <?php
              
               
                $user_list_query ="SELECT * FROM message WHERE email='$email'";
                $run_user_list_query =mysqli_query($conn,$user_list_query);
               while($user_list = mysqli_fetch_assoc($run_user_list_query))
                
               {?>
            <tr>
    
                <td style="font-weight:bold"><?php echo $user_list['id'] ?></td>
                <td style="font-weight:bold"><?php echo $user_list['email'] ?></td>
                <td style="font-weight:bold"><?php echo $user_list['message'] ?></td>

            </tr>
    
             <?php   } ?>

            </tbody>
        </table>
</div>
             </div>
             <div class="col-lg-1"></div>
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
  </body>
</html>