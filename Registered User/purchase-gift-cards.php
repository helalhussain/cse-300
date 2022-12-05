<?php 
include('header.php'); 
include('db.php');

$email = $_SESSION['email'];
$sql ="SELECT approved_gift_card.*
       FROM gift_card JOIN approved_gift_card
       on gift_card.id = approved_gift_card.gift_id
       WHERE gift_card.user_id ='$email'";


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
          <h2 style="text-align: center;">Purchased gift cards</h2>
          <br>
          <table class="table">
            <thead>
              <tr>
                <th>Gift ID</th>
                <th>Token</th>
                <th>Gift price</th>
                
              </tr>
            </thead>
            <tbody>
              <?php
                while($row = mysqli_fetch_assoc($result)){
              
              ?>
              <tr>
                
                <td ><?php echo $row['id']?></td>
                <td><?php echo $row['token']?></td>
                <td><?php echo $row['gift_price'];?></td>
                

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

  </body>
</html>
