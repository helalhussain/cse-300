
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

            <h5 class="py-3">All applyied Gift card</h5>

            <div class="container">
                <table class="table bg-white " style="font-size: 13px;">
                <thead class="bg-white">
                    <tr>
                        <th scope="col">ID </th>
                        <th scope="col">Email</th>
                        <th>Gift price</th>
                        <th scope="col" style="text-align:center;">Delete</th>
                        <th scope="col" style="text-align:center;">Edit</th>
                    </tr>
                </thead>

                <tbody class="text-secondary bg-light">

                    <?php
                
                
                    $recipe_query ="SELECT * FROM gift_card where status = 1 and view=0";
                    $run_recipe_query =mysqli_query($conn,$recipe_query);
                while($all_recipe = mysqli_fetch_assoc($run_recipe_query))
                    
                {?>
                <tr>

                    <td style="font-weight:bold"><?php echo $all_recipe['id'] ?></td>
                    <td style="font-weight:bold"><?php echo $all_recipe['user_id'] ?></td>
                    <td><?php echo $all_recipe['gift'] ?>tk</td>
                    <td class="text-center"><?php 
                        echo"<a href='delete_catergory.php?id=$all_recipe[id]'class='btn btn-danger'>Disapprove</a>";
                        
                            ?>
                    </td>
                    <td class="text-center">
                        <button id='approve' data-gid="<?php echo $all_recipe['id'];?>" data-gval="<?php echo $all_recipe['gift'];?>" class='btn btn-success'>Approve</button>
                        
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
  <script src="https://code.jquery.com/jquery-3.6.1.min.js" integrity="sha256-o88AwQnZB+VDvE9tvIXrMQaPlFFSUTR+nldQm1LuPXQ=" crossorigin="anonymous"></script>
  
  <script>
     $(document).ready(function(){
      $(document).on("click","#approve",function(){
           var gift_id  = $(this).data("gid");
           var gift_price  = $(this).data("gval");
           $.ajax({
               url:'approve-gift-card.php',
               type: "POST",
               data: {
                       gift_id: gift_id,
                       gift_price: gift_price,
                       
                    },
               success:function(data){
                 
                  if(data == 1){
                     alert('Approved successfully');
                     location.href = 'applyied-gift-card.php';
                  }
               }
            });
         
         
           
        });
     });
  </script>
	
<?php include('footer.php'); ?>