
<?php 
include('db.php');
include('header.php');


$sql = "SELECT * FROM card_booking";

$result = mysqli_query($conn, $sql);

?>
	
		<div class="container-fluid-full">
		<div class="row-fluid">
				
<?php include('sidebar.php'); ?>
			
			<noscript>
				<div class="alert alert-block span10">
					<h4 class="alert-heading">Warning!</h4>
					<p>You need to have <a href="http://en.wikipedia.org/wiki/JavaScript" target="_blank">JavaScript</a> enabled to use this site.</p>
				</div>
			</noscript>
			
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

			

			
			<div class="row-fluid">	


				
				<div class="clearfix">
    <div class="cintainer">
      <div class="row">

        <!-- Right side Bar -->
        <div class="col-md-9" style="margin-left: 155px;">
          <h2 style="text-align: center;">Oder List</h2>
          <br>
          <table class="table">
            <thead>
              <tr>
                <th>Order ID</th>
                <th>User Name</th>
                <th>Ingredent Name</th>
                <th>Number</th>
                <th>Price</th>
                <th>Address</th>
                <th>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Action</th>
              </tr>
            </thead>
            <tbody>
              <?php
                while($row = mysqli_fetch_assoc($result)){
              
              ?>
              <tr>

                <td><?php echo $row['id']?></td>
                <td><?php echo $row['u_name']?></td>
                <td><?php echo $row['i_name']?></td>
                <td><?php echo $row['u_number']?></td>
                <td><?php echo $row['price']?></td>
                <td><?php echo $row['address']?></td>
                <td><a class="btn btn-succees" href="edit_booking.php?id=<?php echo $row['id'];?>&tk=<?php echo $row['price']; ?>">Edit Now</a>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<a class="btn btn-danger" onclick="return confirm('Are You Sure!!! You Delete this?')" href="delete_payment.php?id=<?php echo $row['id'];?>">Delete</a></td>

              </tr>
              <?php
                // Here End while loop
              }
              ?>
            </tbody>
          </table>
        </div>
        
      </div>
      
    </div>
				</div>
								
			</div><!--/row-->
			
       

	</div><!--/.fluid-container-->
	
			<!-- end: Content -->
		</div><!--/#content.span10-->
		</div><!--/fluid-row-->
		
	<div class="modal hide fade" id="myModal">
		<div class="modal-header">
			<button type="button" class="close" data-dismiss="modal">×</button>
			<h3>Settings</h3>
		</div>
		<div class="modal-body">
			<p>Here settings can be configured...</p>
		</div>
		<div class="modal-footer">
			<a href="#" class="btn" data-dismiss="modal">Close</a>
			<a href="#" class="btn btn-primary">Save changes</a>
		</div>
	</div>
	
	<div class="clearfix"></div>
	
<?php include('footer.php'); ?>