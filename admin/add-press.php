
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
                <h2><i class="halflings-icon edit"></i><span class="break"></span>Add Press</h2>

            </div>

            <div class="box-content">
                <form class="form-horizontal" method="post" enctype="multipart/form-data">
                    
                    <fieldset>
                        <div class="control-group">
                            <label class="control-label" for="date01">Press Title</label>
                            <div class="controls">
                                <input type="text" class="input-xlarge" name="title" placeholder="Press Title" required>
                            </div>
                        </div>
                        <div class="control-group">
                            <label class="control-label" for="date01">Description</label>
                            <div class="controls">
                                <input type="text" class="input-xlarge" name="description" placeholder="Description" required>
                            </div>
                        </div>
                       
                        <div class="control-group">
                            <label class="control-label">Link</label>
                            <div class="controls">
                                <input type="text"  name="siteLink">
                            </div>
                        </div>
                        <div class="form-actions">
                            <button type="submit" name="upload" class="btn btn-primary">Add Press</button>
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
        
        $date =date("h:m:a d-m-Y");

        $siteLink = mysqli_real_escape_string($conn,$_POST['siteLink']);
	 $sql = "INSERT INTO press VALUES(NULL,'$title','$description','$date','$siteLink')";
      $query = mysqli_query($conn,$sql);

        if($query){
            ?>
		<META HTTP-EQUIV="Refresh" CONTENT="0; URL=http://localhost/RecipeBD/admin/all-press.php"> 

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