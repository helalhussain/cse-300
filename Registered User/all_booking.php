<?php 
include('header.php'); 
include('db.php');

$sql = "SELECT * FROM card_booking";

$result = mysqli_query($conn, $sql);
// $data = mysqli_fetch_assoc($result);

// $h_name = $data['c_id'];
// echo $h_name;
// die();

?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>Order List</title>

    <!-- Bootstrap -->
    <link href="css/bootstrap.min.css" rel="stylesheet">


  </head>
  <body>
    <br><br><br>

    <div class="cintainer">
      <div class="row">

        <!-- Right side Bar -->
        <div class="col-md-9" style="margin-left: 155px;">
          <h2 style="text-align: center;">Order List</h2>
          <br>
          <table class="table">
            <thead>
              <tr>
                <th>Order ID</th>
                <th>User Name</th>
                <th>Ingredent Name</th>
                <th>Number</th>
                <th>Price</th>
                <th>Address</th>
                <th>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Action</th>
              </tr>
            </thead>
            <tbody>
              <?php
                while($row = mysqli_fetch_assoc($result)){
              
              ?>
              <tr>

                <td><?php echo $row['id']?></td>
                <td><?php echo $row['u_name']?></td>
                <td><?php echo $row['i_name']?></td>
                <td><?php echo $row['u_number']?></td>
                <td><?php echo $row['price']?></td>
                <td><?php echo $row['address']?></td>
                <td><a class="btn btn-dark" onclick="return confirm('Do you want to payment now?')" href="Payment/payment.php?id=<?php echo $row['id'];?>&tk=<?php echo $row['price']; ?>">Pay Now</a>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</td>

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
