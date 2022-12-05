
<?php
 include('db.php');
 session_start();
 error_reporting(0);


?>
<?php include('header.php') ?>

        <?php include 'header.php' ?>
        <?php include '../db/dbconnect.php' ?>
        <?php include 'header.php' ?>
        <?php include 'db.php' ?>
    <?php $get_id = $_GET['id']; 
    $edit_sql =  "SELECT * FROM press WHERE id='$get_id'";
    $edit_result = mysqli_query($conn, $edit_sql);
    $edit = mysqli_fetch_assoc($edit_result); 
    
    
    ?>
	<div class="container-fluid-full">
	<div class="row-fluid">
				
<?php include('sidebar.php'); ?>		
			
			<!-- start: Content -->
			<div id="content" class="span10">			
			<ul class="breadcrumb">
				<li>
					<i class="icon-home"></i>
					<a href="index.html">Home</a> 
					<i class="icon-angle-right"></i>
				</li>
				<li><a href="#">Dashboard</a></li>
			</ul>
           <!----Start User List--->
           <?php include 'db.php' ?>




           <div class="row-fluid sortable">
        <div class="box span12">
            <div class="box-header" data-original-title>
                <h2><i class="halflings-icon edit"></i><span class="break"></span>Edit Press</h2>

            </div>

            <div class="box-content">
                <form class="form-horizontal" method="post" enctype="multipart/form-data">
                    
                    <fieldset>
                        <div class="control-group">
                            <label class="control-label" for="date01">Press Title</label>
                            <div class="controls">
                                <input type="text" class="input-xlarge" name="title" value="<?php echo $edit['title'] ?>" placeholder="Press Title" required>
                            </div>
                        </div>
                        <div class="control-group">
                            <label class="control-label" for="date01">Description</label>
                            <div class="controls">
                                <input type="text" class="input-xlarge" name="description" value="<?php echo $edit['description'] ?>" placeholder="Description" required>
                            </div>
                        </div>
 
                        <div class="form-actions">
                            <button type="submit" name="upload" class="btn btn-primary">Edit Press</button>
                        </div>
                    </fieldset>
                </form>

            </div>
        </div><!--/span-->
    </div><!--/row-->
    </div><!--/row-->









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
  
   
     
      $edit_query ="UPDATE press SET title='$title', description='$description' WHERE id='$get_id'";
   
      $query = mysqli_query($conn,$edit_query);

     if($query){?>

       <META HTTP-EQUIV="Refresh" CONTENT="0; URL=http://localhost/recipeBD/admin/all-press.php">
    <?php }else{

     }

			
		}

	?>


            <!----End User List--->
			</div><!--/.fluid-container-->

          
			<!-- end: Content -->
	</div><!--/#content.span10-->
	</div><!--/fluid-row-->
		
	
<?php include('footer.php'); ?>







