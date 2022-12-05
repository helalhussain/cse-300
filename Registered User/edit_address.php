<?php


$order_id = $_GET['id'];
$address  = $_GET['oldaddress'];
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
                <div class="col-lg-3"></div>
                <div class="col-lg-6">
                    <div class="card p-4">
                        <h4 class="text-center">Change Address </h4>
                <form action="" method='post' enctype="multipart/form-data">
             
                     <div class="form-group">
                        <label for="pheight">Change Address:</label>
                        <input type="text" value="<?php echo $address; ?>" placeholder="Enter new address" class="form-control my-1" id="pheight" name="address" required>
                    </div>
            
                    <button type="submit" name="change" class="btn btn-outline-dark w-100 my-3">Change Address</button>
                </form>
                </div>
                </div>
                <div class="col-lg-3"></div>
            </div>
    </div>

<?php
if(isset($_POST['change'])){
    
    $send_address= $_POST['address'];
	  $edit_query ="UPDATE card_booking SET address='$send_address' WHERE id='$order_id'";
   

    if(mysqli_query($conn,$edit_query)){
        
       header("Location:all_order.php");
       
      }
}
?>

   

</body>

</html>