<?php

 include('db.php');
   $email = $_POST['email'];

    
    $status =0;
    $gift= $_POST['giftvalue'];

                                
                                // $reg_query = "INSERT t_INTO contact VALUES(NULL,'$email','$message','$date','$status')";
    $gift_card = "INSERT INTO gift_card( `user_id`, `gift`,  `status`) VALUES ('$email','$gift','$status')";
    $query_run =mysqli_query($conn,$gift_card);
                               
    if($query_run){
        echo 1;
    }                  
  ?>