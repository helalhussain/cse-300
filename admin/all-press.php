<title>ReceipeBd</title>
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
           <!----Start--->
           <?php include 'db.php' ?>
           <div class="container my-5">

            <h5 class="py-3">All Press</h5>

            <div class="container" style="width:90%;">
                <table class="table bg-white " style="font-size: 13px;">
                <thead class="bg-white" >
                    <tr >
                        <th scope="col">ID </th>
                        <th scope="col">Title</th>
                        <th scope="col">Description</th>
                        
                        <th scope="col" style="text-align:center;">Delete</th>
                        <th scope="col" style="text-align:center;">Edit</th>
                
                    

                    </tr>
                </thead>

                <tbody class="text-secondary bg-light">

                    <?php
                
                
                    $recipe_query ="SELECT * FROM press";
                    $run_recipe_query =mysqli_query($conn,$recipe_query);
                while($all_recipe = mysqli_fetch_assoc($run_recipe_query))
                    
                {?>
                <tr>

                    <td style="font-weight:bold"><?php echo $all_recipe['id'] ?></td>
              
                    <td style="font-weight:bold"><?php echo $all_recipe['title'] ?></td>
                    <td style="font-weight:bold"><?php echo $all_recipe['description'] ?></td>
                    
                    <td class="text-center"><?php 
                        echo"<a href='delete_press.php?id=$all_recipe[id]' class=' btn btn-danger'>Delete</a>";
                        
                            ?>
                    </td>
                    <td class="text-center"><?php 
                        echo"<a href='edit_press.php?id=$all_recipe[id]' class=' btn btn-success'>Edit</a>";
                        
                            ?>
                    </td>

                </tr>

                <?php   } ?>

                </tbody>
            </table>

            </div>
            </div>
            <!----End--->
			</div><!--/.fluid-container-->

          
			<!-- end: Content -->
	</div><!--/#content.span10-->
	</div><!--/fluid-row-->
		
	
<?php include('footer.php'); ?>