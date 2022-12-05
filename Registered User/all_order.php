
<?php 
include('db.php');
include('header.php');


$sql = "SELECT * FROM card_booking";

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
          <h2 style="text-align: center;">Order List</h2>
          <a class="btn btn-success" style="float: right;" href="order_history.php" >Order History</a>
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
                <td><a class="btn btn-succees" href="edit_address.php?id=<?php echo $row['id'];?>&oldaddress=<?php echo $row['address']; ?>">Edit address</a>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<a class="btn btn-danger" onclick="return confirm('Are You Sure!!! You Delete this?')" href="cancel_order.php?id=<?php echo $row['id'];?>">Cancel Order</a></td>

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