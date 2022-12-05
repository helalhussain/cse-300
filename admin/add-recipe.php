
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
                        <div class="control-group">
                            <label class="control-label" for="date01">Tags</label>
                            <div class="controls">
                                <select name="tag" class="input-xlarge" required>
                                    <option value="">Select tag</option>
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
                                    <option value="">Select category</option>
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
                                <textarea class="cleditor" name="ingredient" rows="3" required></textarea>
                            </div>
                        </div>
                        <div class="control-group hidden-phone">
                            <label class="control-label" for="textarea2">Description</label>
                            <div class="controls">
                                <textarea class="cleditor" name="description" rows="3" required></textarea>
                            </div>
                        </div>
                        <div class="control-group">
                            <label class="control-label" for="date01">Prep time</label>
                            <div class="controls">
                                <input type="text" class="input-xlarge" name="preptime" required>
                            </div>
                        </div>
                        <div class="control-group">
                            <label class="control-label" for="date01">Cooking time</label>
                            <div class="controls">
                                <input type="text" class="input-xlarge" name="cookingtime" required>
                            </div>
                        </div>
                        <div class="control-group">
                            <label class="control-label" for="date01">Serving</label>
                            <div class="controls">
                                <input type="text" class="input-xlarge" name="serving" required>
                            </div>
                        </div>
                        <div class="control-group hidden-phone">
                            <label class="control-label" for="textarea2">Instruction</label>
                            <div class="controls">
                                <textarea class="cleditor" name="instruction" rows="3" required></textarea>
                            </div>
                        </div>
                        <hr/>
                        <br/>
                        
                        <div class="control-group">
                            <div class="container">
<h4 class="">Nutritional Facts</h4>
                            </div>
                        
                            <label class="control-label" for="date01">Calories</label>
                            <div class="controls">
                                <input type="text" class="input-xlarge" name="calories" required>
                            </div>
                        </div>
                        <div class="control-group">
                            <label class="control-label" for="date01">Cholesterol</label>
                            <div class="controls">
                                <input type="text" class="input-xlarge" name="cholesterol" required>
                            </div>
                        </div>
                        <div class="control-group">
                            <label class="control-label" for="date01">Sodium</label>
                            <div class="controls">
                                <input type="text" class="input-xlarge" name="sodium" required>
                            </div>
                        </div>
                        <div class="control-group">
                            <label class="control-label" for="date01">Protein</label>
                            <div class="controls">
                                <input type="text" class="input-xlarge" name="protein" required>
                            </div>
                        </div>
                        <div class="control-group">
                            <label class="control-label" for="date01">Fat</label>
                            <div class="controls">
                                <input type="text" class="input-xlarge" name="fat" required>
                            </div>
                        </div>
                        <div class="control-group">
                            <label class="control-label">File Upload</label>
                            <div class="controls">
                                <input type="file"  name="uploadfile1">
                            </div>
                        </div>


                        <div class="form-actions">
                            <button type="submit" name="upload" class="btn btn-primary">Add Category</button>
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
      $Prep = $_POST['preptime'];
      $Cooking = $_POST['cookingtime'];
      $Serving = $_POST['serving'];
			$tag = $_POST['tag'];
			$cat= $_POST['category'];

    $calories =$_POST['calories'];
    $cholesterol =$_POST['cholesterol'];
    $sodium = $_POST['sodium'];
    $protein = $_POST['protein'];
    $fat = $_POST['fat'];
		
	$ingredient = $_POST['ingredient'];
      $description =$_POST['description'];
      $instruction = $_POST['instruction'];
      $filename1 = $_FILES['uploadfile1']['name'];
      $tempname1 =$_FILES['uploadfile1']['tmp_name'];
      $image_1 ="image/recipe/".$filename1;
      move_uploaded_file($tempname1,$image_1);
      $status =1;

			$sql = "INSERT INTO recipe VALUES(NULL,'$title','$description','$Prep', '$Cooking', '$Serving', '$instruction',
             '$tag','$cat','$ingredient', '$image_1','$calories','$cholesterol','$sodium','$protein','$fat','$status')";
      $query = mysqli_query($conn,$sql);

        if($query){
            ?>
		<META HTTP-EQUIV="Refresh" CONTENT="0; URL=http://localhost/RecipeBD/admin/all-recipe.php"> 

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