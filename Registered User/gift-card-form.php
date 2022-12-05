<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css">
    <title>Order Now</title>
</head>

<body class="main_bg">
    <div class="form">
      <div class="col-md-2">
          <a class="btn btn-dark" href="gift-card.php" style="font-size: 20px;">Back</a><br><br>
        </div>
        <div class="form-text">
            <h1>Order Now </span></h1>
            
        </div>
        <div class="main-form">  
            <form method="post" action="store_booking.php?i_id=<?php echo $id;?>">  
                   
                <div>
                    <span>Your Full Name:</span>
                    <input type="text" name="name" id="name" placeholder="Write your name here..." required>
                </div>
                <div>
                    <span>Your Mobile Number:</span>
                    <input type="text" name="number" id="number" placeholder="Write your number here..." >
                </div>
                <div>
                    <span>Card Price:</span>
                    <input type="text" name="price" placeholder="Write card price here..." required>
                </div>
                
                <div>
                    <span>Your Address:</span>
                    <input type="address" name="address" id="address" placeholder="Write your address here...">
                </div>
                
                
            

<!--                 <div>
                    <span>What is the date of booking?</span>
                    <input type="date" name="date" id="date" placeholder="date" >
                </div> -->

                
                <div id="submit">
                    <input type="submit" value="SUBMIT" id="submit">
                </div>


            </form>
        </div>
    </div>
</body>
<script
  src="https://code.jquery.com/jquery-3.6.1.js"
  integrity="sha256-3zlB5s2uwoUzrXK3BT7AX3FyvojsraNFxCc2vC/7pNI="
  crossorigin="anonymous">
      
</script>

<script type="text/javascript">
$(document).ready(function(){
  $("#apply").click(function(){
    $('#msg').css("display", "block");
  });
});
</script>
</html>