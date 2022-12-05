<?php
 include('db.php');
 session_start();
 error_reporting(0);


?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href='/RecipeBD/admin/assets/bootstrap/css/bootstrap.min.css'>
    <link rel=" stylesheet" href='/RecipeBD/admin/assets/css/style.css'>
    <link rel="stylesheet" href='/RecipeBD/admin/assets/font-awesome/css/font-awesome.min.css'> 

    <title>RecipeBD || Dashboard</title>

</head>



<body id="admin_root">



    <?php include 'header.php' ?>
    <?php include '../db/dbconnect.php' ?>
    <?php include 'header.php' ?>
    <?php include 'db.php' ?>
<?php $get_id = $_GET['id']; 
$edit_sql =  "SELECT * FROM trick WHERE id='$get_id'";
$edit_result = mysqli_query($conn, $edit_sql);
$edit = mysqli_fetch_assoc($edit_result); 
?>
    <div class="container my-5">
        <h4 class="py-3">Edit Circular</h4>

       <div class="container">
   
            <div class="row">
                <div class="col-lg-2"></div>
                <div class="col-lg-8">
                    <div class="card p-2">
                    <form method="POST"  enctype="multipart/form-data">
                              
                              <div class="row">
                                  <div class="col-sm-3">
                                    <h6 class="text-dark" >Title:</h6>
                                  </div>
                                  <div class="col-sm-9 text-secondary">
                                  <div class="form-group">
                                  <input class="form-control" type="text" name="title" value="<?php echo $edit['title'] ?>"  placeholder="Title" required>
                                  </div>
                                  </div>
                                </div>
                                <hr>
                                <div class="row">
                                  <div class="col-sm-3">
                                    <h6 class="mb-0 text-dark">Description:</h6>
                                  </div>
                                  <div class="col-sm-9 text-secondary">
                                    <div class="form-group">
									<label for="description"></label>
                                      <input type="text" class="form-control" value="<?php echo $edit['description']; ?>"  name="description" required>
                                      
                                    </div>
                                  </div>
                                </div>       
                        <br>
                                </div>
                                <hr>
                                <div class="row">
                                  <div class="col-sm-12">
                                    <button class="btn-style-one text-white bg-dark" name="upload" >Edit</button>
                                    <a href="all-trick.php">Cancel</a>
                                  </div>
                                </div>
                             
                            </form>
                    </div>
                </div>
                <div class="col-lg-2"></div>
            </div>
       </div>
    </div>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script>
    $(document).ready(function() {
        $('.summernote').summernote();
    });
  </script>
<?php
		if(isset($_POST['upload'])){
	   $title = $_POST['title'];
		
      $description = $_POST['description'];
  
   
      $status =1;
      $edit_query ="UPDATE trick SET title='$title', description='$description' WHERE id='$get_id'";
   
      $query = mysqli_query($conn,$edit_query);

     if($query){?>

       <META HTTP-EQUIV="Refresh" CONTENT="0; URL=http://localhost/recipeBD/admin/all-trick.php">
    <?php }else{

     }

			
		}

	?>


    <!--  JS Files -->
    <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
  
    <script src='/CourierBD/assets/bootstrap/js/bootstrap.bundle.js'></script>
    
    <script src='/CourierBD/assets/js/app.js'></script>
    
   

</body>

</html>