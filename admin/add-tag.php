
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
                            <label class="control-label" for="date01">Tag Title</label>
                            <div class="controls">
                                <input type="text" class="input-xlarge" name="title" placeholder="Tag Title" required>
                            </div>
                        </div>
 
                        <div class="form-actions">
                            <button type="submit" name="upload" class="btn btn-primary">Add Tag</button>
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

	 $sql = "INSERT INTO tags VALUES(NULL,'$title')";
      $query = mysqli_query($conn,$sql);

        if($query){
            ?>
		<META HTTP-EQUIV="Refresh" CONTENT="0; URL=http://localhost/RecipeBD/admin/all-tag.php"> 

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