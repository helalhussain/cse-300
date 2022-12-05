
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
            <div class="container my-5">
                <h5 class=" py-3">All User</h5>

            <div class="container">
                    <table class="table bg-white " style="font-size: 13px;">
                    <thead class="bg-white">
                        <tr>
                            <th scope="col">ID </th>
                            <th scope="col">Name </th>
                            <th scope="col">Email </th>
                            <th scope="col">Number </th>
                            <th scope="col">Block</th>
                            <th scope="col">Delete</th>

                        </tr>
                    </thead>
                    <tbody class="text-secondary bg-light">
                        <?php 
                        $user_list_query ="SELECT * FROM users";
                        $run_user_list_query =mysqli_query($conn,$user_list_query);
                    while($user_list = mysqli_fetch_assoc($run_user_list_query))
                        
                    {?>
                    <tr>
                        <td><?php echo $user_list['id'] ?></td>
                        <td><?php echo $user_list['name'] ?></td>
                        <td><?php echo $user_list['email'] ?></td>
                        <td><?php echo $user_list['number'] ?></td>
                        <td class="text-center"><?php 
                            if($user_list['status']=='1'){
                            echo"<a href='block.php?id=$user_list[id]' class=' btn btn-danger'> Block </a>";
                            }else{
                            echo"<a href='unblock.php?id=$user_list[id]' class=' btn btn-success'>Unblock</a>";
                            }
                        ?></td>
                            <td class="text-center"><?php 
                            echo"<a href='delete.php?id=$user_list[id]' class=' btn btn-danger'>Delete</a>";
                            
                        ?></td>
                    </tr>
                    <?php   } ?>

                    </tbody>
                </table>

            </div>
            </div>
            <!----End User List--->
			</div><!--/.fluid-container-->

          
			<!-- end: Content -->
	</div><!--/#content.span10-->
	</div><!--/fluid-row-->
		
	
<?php include('footer.php'); ?>