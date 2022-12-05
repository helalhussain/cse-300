
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
                <h2><i class="halflings-icon edit"></i><span class="break"></span>Add Chefs food</h2>

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
                            <label class="control-label" for="date01">Select chef</label>
                            <div class="controls">
                                <select type="text" class="input-xlarge" name="chef_id" required>
                                <option value="">Select chef</option>
                                <?php 
                                    $chef_query ="SELECT * FROM chefs";
                                    $run_chef_query =mysqli_query($conn,$chef_query);
                                while($all_chef = mysqli_fetch_assoc($run_chef_query)){?>

<option value="<?php echo $all_chef['id']; ?>"><?php echo $all_chef['name']; ?></option>

                              <?php  } ?>
                                </select>
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
                            <button type="submit" name="upload" class="btn btn-primary">Add Chef food</button>
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
		
      $chef_id =$_POST['chef_id'];
      $description =$_POST['description'];

      $filename1 = $_FILES['uploadfile1']['name'];
      $tempname1 =$_FILES['uploadfile1']['tmp_name'];
      $image_1 ="image/recipe/".$filename1;
      move_uploaded_file($tempname1,$image_1);
    //   $date = date("Y/m/d");
	  $sql = "INSERT INTO chef_foods VALUES(NULL,'$chef_id','$title','$description','$image_1')";
      $query = mysqli_query($conn,$sql);

            if($query){?>
        
        <META HTTP-EQUIV="Refresh" CONTENT="0; URL=http://localhost/RecipeBD/admin/all-chef-food.php"> 
          <?php  }

			
		}

	?>




            <!----End User List--->
			</div><!--/.fluid-container-->

          
			<!-- end: Content -->
	</div><!--/#content.span10-->
	</div><!--/fluid-row-->
		
	
<?php include('footer.php'); ?>