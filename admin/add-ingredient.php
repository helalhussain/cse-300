
<?php include('header.php') ?>
	
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
                <h2><i class="halflings-icon edit"></i><span class="break"></span>Add Ingredient</h2>

            </div>

            <div class="box-content">
                <form class="form-horizontal" method="post" enctype="multipart/form-data">
                    
                    <fieldset>
                        <div class="control-group">
                            <label class="control-label" for="date01">Title</label>
                            <div class="controls">
                                <input type="text" class="input-xlarge" name="title" placeholder="Title" required>
                            </div>
                        </div>
                        <div class="control-group">
                            <label class="control-label" for="date01">Quantity</label>
                            <div class="controls">
                                <input type="text" class="input-xlarge" name="quantity" placeholder="Quantity" required>
                            </div>
                        </div>
                        <div class="control-group">
                            <label class="control-label" for="peice">Price</label>
                            <div class="controls">
                                <input type="text" class="input-xlarge" name="peice" placeholder="Price" required>
                            </div>
                        </div>

                        <div class="control-group hidden-phone">
                            <label class="control-label" for="textarea2">Description</label>
                            <div class="controls">
                                <textarea class="cleditor" name="description" rows="3" required></textarea>
                            </div>
                        </div>

                        <div class="control-group">
                            <label class="control-label">File Upload</label>
                            <div class="controls">
                                <input type="file"  name="uploadfile1">
                            </div>
                        </div>


                        <div class="form-actions">
                            <button type="submit" name="upload" class="btn btn-success">Add Ingredient</button>
                        </div>
                    </fieldset>
                </form>

            </div>
        </div><!--/span-->
    </div><!--/row-->
    </div><!--/row-->





    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

<?php
		if(isset($_POST['upload'])){
	    $title = $_POST['title'];
		$quantity = $_POST['quantity'];
        $peice = $_POST['peice'];
      $description =$_POST['description'];

      $filename1 = $_FILES['uploadfile1']['name'];
      $tempname1 =$_FILES['uploadfile1']['tmp_name'];
      $image_1 ="image/recipe/".$filename1;
      move_uploaded_file($tempname1,$image_1);
      
      $date = date("Y/m/d");
	  $sql = "INSERT INTO ingredints(id, title, description, image, date, price, quantity) VALUES(NULL,'$title','$description','$image_1','$date', '$peice','$quantity')";
      $query = mysqli_query($conn,$sql);

            if($query){?>
        
        <META HTTP-EQUIV="Refresh" CONTENT="0; URL=http://localhost/RecipeBD/admin/all-ingredient.php"> 
          <?php  }

			
		}

	?>




            <!----End User List--->
			</div><!--/.fluid-container-->

          
			<!-- end: Content -->
	</div><!--/#content.span10-->
	</div><!--/fluid-row-->
		
	
<?php include('footer.php'); ?>