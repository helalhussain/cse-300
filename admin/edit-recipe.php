
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

<?php
$get_id = $_GET['id'];
        $query ="SELECT * FROM recipe WHERE id='$get_id'";
        $run_query =mysqli_query($conn,$query);
       $edit_value = mysqli_fetch_assoc($run_query);

?>


           <div class="row-fluid sortable">
        <div class="box span12">
            <div class="box-header" data-original-title>
                <h2><i class="halflings-icon edit"></i><span class="break"></span>Add Recipe</h2>

            </div>

            <div class="box-content">
                <form class="form-horizontal" method="POST" enctype="multipart/form-data">
                    
                    <fieldset>
                        <div class="control-group">
                            <label class="control-label" for="date01">Title</label>
                            <div class="controls">
                                <input type="text" value="<?php echo $edit_value['title']; ?>" class="input-xlarge" name="title" required>
                            </div>
                        </div>
                        <div class="control-group">
                            <label class="control-label" for="date01">Tags</label>
                            <div class="controls">
                                <select name="tag" class="input-xlarge" required>
                                    <option value="<?php echo $edit_value['tag']; ?>"><?php echo $edit_value['tag']; ?></option>
                                <?php
                                        $query ="SELECT * FROM tags";
                                        $data =mysqli_query($conn,$query);
                                        while($tag = mysqli_fetch_assoc($data)){?>
                                        <option value="<?php echo $tag['tagName']; ?>"><?php echo $tag['tagName'] ?></option>

                                    <?php }?>
                                </select>
                              
                            </div>
                        </div>
                        <div class="control-group">
                            <label class="control-label" for="date01">Category</label>
                            <div class="controls">
                                <select name="category"class="input-xlarge" required>
                                <option value="<?php echo $edit_value['category']; ?>"><?php echo $edit_value['category']; ?></option>
                                <?php
                                        $query ="SELECT * FROM category";
                                        $data =mysqli_query($conn,$query);
                                        while($cat = mysqli_fetch_assoc($data)){?>
                                        <option value="<?php echo $cat['category']; ?>"> <?php echo $cat['category']; ?></option>

                                    <?php }?>
                                </select>
                            </div>
                        </div>

                        <div class="control-group hidden-phone">
                            <label class="control-label" for="textarea2">Ingredients</label>
                            <div class="controls">
                                <textarea class="cleditor" name="ingredient" rows="3" required>
                                <?php echo $edit_value['ingredient']; ?>
                            </textarea>
                            </div>
                        </div>
                        <div class="control-group hidden-phone">
                            <label class="control-label" for="textarea2">Description</label>
                            <div class="controls">
                                <textarea class="cleditor" name="description" rows="3" required>
                                <?php echo $edit_value['description']; ?>
                                </textarea>
                            </div>
                        </div>
                        <div class="control-group">
                            <label class="control-label" for="date01">Prep time</label>
                            <div class="controls">
                                <input type="text" value="<?php echo $edit_value['Prep Time']; ?>" class="input-xlarge" name="preptime" required>
                            </div>
                        </div>
                        <div class="control-group">
                            <label class="control-label" for="date01">Cooking time</label>
                            <div class="controls">
                                <input type="text" value="<?php echo $edit_value['Cooking Time']; ?>"  class="input-xlarge" name="cookingtime" required>
                            </div>
                        </div>
                        <div class="control-group">
                            <label class="control-label" for="date01">Serving</label>
                            <div class="controls">
                                <input type="text" value="<?php echo $edit_value['Serving']; ?>"  class="input-xlarge" name="serving" required>
                            </div>
                        </div>
                        <div class="control-group hidden-phone">
                            <label class="control-label" for="textarea2">Instruction</label>
                            <div class="controls">
                                <textarea class="cleditor" name="instruction" rows="3" required>
                             <?php echo $edit_value['Instructions']; ?>
                                </textarea>
                            </div>
                        </div>
                        <div class="control-group">
                            <label class="control-label">File Upload</label>
                            <div class="controls">
                                <input type="file" name="uploadfile1" required>
                            </div>
                        </div>


                        <div class="form-actions">
                            <button type="submit" name="update" class="btn btn-primary">Edit</button>
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
	if(isset($_POST['update'])){
		$title = $_POST['title'];
      $description = $_POST['description'];
      $Prep = $_POST['preptime'];
      $Cooking = $_POST['cookingtime'];
      $Serving = $_POST['serving'];
			$tag = $_POST['tag'];
			$cat= $_POST['category'];
		
			$ingredient = $_POST['ingredient'];
      $description =$_POST['description'];
      $instruction = $_POST['instruction'];

      $filename1 = $_FILES['uploadfile1']['name'];
      $tempname1 =$_FILES['uploadfile1']['tmp_name'];
      $image_1 ="image/recipe/".$filename1;
      move_uploaded_file($tempname1,$image_1);

			$sql = "UPDATE recipe SET title='$title' WHERE id='get_id'";
           
      $edit = mysqli_query($conn,$sql);

        if($edit){
            echo "<script>alert('Success');</script>";
            ?>
		<!-- <META HTTP-EQUIV="Refresh" CONTENT="0; URL=http://localhost/RecipeBD/admin/all-recipe.php">  -->
       

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