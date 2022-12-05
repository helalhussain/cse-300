<?php

  include('../db.php');
  $sql = "Select * From peymant";
  $result = mysqli_query($conn, $sql);


?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>Booking</title>

    <!-- Bootstrap -->
    <link href="css/bootstrap.min.css" rel="stylesheet">


  </head>
  <body>
    <br><br><br>

    <div class="cintainer">
      <div class="row">

        <!-- Right side Bar -->
        <div class="col-md-9" style="margin-left: 155px;">
          <h2 style="text-align: center;">Payment List</h2>
          <br>
          <table class="table">
            <thead>
              <tr>
                <th>Payment ID</th>
                <th>User_Name</th>
                <th>User_Number</th>
                <th>User_Address</th>
                <!-- <th>Ingredient Name</th> -->
                <th>Price</th>
                <th>Tran Id</th>
              </tr>
            </thead>
            <tbody>
              <?php
                while($row = mysqli_fetch_assoc($result)){
              
              ?>
              <tr>
                <td><?php echo $row['id']?></td>
                <td><?php echo $row['u_name']?></td>
                <td><?php echo $row['u_number']?></td>
                <td><?php echo $row['i_name']?></td>
                <td><?php echo $row['tk']?></td>
                <td><?php echo $row['tran_id']?></td>
              </tr>
              <?php
                // Here End while loop
              }
              ?>
            </tbody>
          </table>
        </div>
        
      </div>
      
    </div>

    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="js/bootstrap.min.js"></script>
  </body>
</html>