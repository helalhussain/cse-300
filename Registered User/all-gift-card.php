<?php 
include('header.php'); 
include('db.php');

$email = $_SESSION['email'];
$sql ="SELECT * FROM gift_card WHERE user_id='$email'";


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
                <th>User Email</th>
                <th>Gift Value</th>
                <th>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Action</th>
              </tr>
            </thead>
            <tbody>
              <?php
                while($row = mysqli_fetch_assoc($result)){
              
              ?>
              <tr>
                
                <td ><?php echo $row['id']?></td>
                <td><?php echo $row['user_id']?></td>
                <td><?php echo $row['gift'];?></td>
                <td><a id="payment" data-pid="<?php echo $row['id'];?>" class="btn btn-dark"  href="Payment/payment-gift-card.php?id=<?php echo $row['id'];?>&tk=<?php echo $row['gift']; ?>">Pay Now</a>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</td>

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
    <script src="https://code.jquery.com/jquery-3.6.1.min.js" integrity="sha256-o88AwQnZB+VDvE9tvIXrMQaPlFFSUTR+nldQm1LuPXQ=" crossorigin="anonymous"></script>
  </body>
  <script>
     $(document).ready(function(){
      $(document).on("click","#payment",function(){
           var gift_id  = $(this).data("pid");
           
           $.ajax({
               url:'payment-status-change.php',
               type: "POST",
               data: {
                       
                       gift_id: gift_id,
                       
                    },
               success:function(data){
                 
                  
               }
            });
         
           
        });
     });
  </script>
  </body>
</html>
