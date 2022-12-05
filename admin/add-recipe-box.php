
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
                <h2><i class="halflings-icon edit"></i><span class="break"></span>Add Recipe</h2>

            </div>

            <div class="box-content">
                <form class="form-horizontal" method="post" enctype="multipart/form-data">
                    
                    <fieldset>
                        <div class="control-group">
                            <label class="control-label" for="date01">Title</label>
                            <div class="controls">
                                <input type="text" class="input-xlarge" name="title" required>
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
                        <div class="control-group">
                            <label class="control-label">File Upload</label>
                            <div class="controls">
                                <input type="file"  name="uploadfile2">
                            </div>
                        </div>
                        <div class="control-group">
                            <label class="control-label">File Upload</label>
                            <div class="controls">
                                <input type="file"  name="uploadfile3">
                            </div>
                        </div>
                        <div class="control-group">
                            <label class="control-label">File Upload</label>
                            <div class="controls">
                                <input type="file"  name="uploadfile4">
                            </div>
                        </div>
        
                        <br/>
                        



                        <div class="form-actions">
                            <button type="submit" name="upload" class="btn btn-primary">Add Box</button>
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

      $filename1 = $_FILES['uploadfile1']['name'];
      $tempname1 =$_FILES['uploadfile1']['tmp_name'];
      $image_1 ="image/".$filename1;
      move_uploaded_file($tempname1,$image_1);

      $filename2 = $_FILES['uploadfile2']['name'];
      $tempname2 =$_FILES['uploadfile2']['tmp_name'];
      $image_2 ="image/".$filename2;
      move_uploaded_file($tempname2,$image_2);
      
      $filename3 = $_FILES['uploadfile3']['name'];
      $tempname3 =$_FILES['uploadfile3']['tmp_name'];
      $image_3 ="image/".$filename3;
      move_uploaded_file($tempname3,$image_3);
      
      $filename4 = $_FILES['uploadfile4']['name'];
      $tempname4 =$_FILES['uploadfile4']['tmp_name'];
      $image_4 ="image/".$filename4;
      move_uploaded_file($tempname4,$image_4);

      $time =date("h:m:a d-m-Y");
      $status =1;

			$sql = "INSERT INTO recipe_box VALUES(NULL,'$title','$description',
            '$image_1','$image_2','$image_3','$image_4','$status','$data')";
      $query = mysqli_query($conn,$sql);

        if($query){
            ?>
		<META HTTP-EQUIV="Refresh" CONTENT="0; URL=http://localhost/RecipeBD/admin/all-recipe-box.php"> 

	<?php
        }else{
            echo "<script>alert('Failed');</script>";
        }

			
		}

	?>


            <!----End User List--->
			</div><!--/.fluid-container-->

          
			<!-- end: Content -->
	</div><!--/#content.span10-->
	</div><!--/fluid-row-->
		
	
<?php include('footer.php'); ?>