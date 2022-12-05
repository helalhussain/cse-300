
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

<h5 class="py-3">All Recipe</h5>

<div class="container">
    <table class="table bg-white " style="font-size: 13px;">
    <thead class="bg-white">
        <tr>
            <th scope="col">ID </th>
            <th scope="col">Title </th>
            <th scope="col">Tag </th>
            <th scope="col">Category</th>
            <th scope="col">Prep </th>
            <th scope="col">Cooking</th>
            <th scope="col">ingredient </th>
            <th scope="col">Calories </th>
            <th scope="col">Sodium </th>
            <th scope="col">Description </th>
            <th scope="col" style="text-align: center;">Delete </th>
            <th scope="col" style="text-align: center;">Edit </th>
     
         

        </tr>
    </thead>

    <tbody class="text-secondary bg-light">

        <?php
      
       
        $recipe_query ="SELECT * FROM recipe";
        $run_recipe_query =mysqli_query($conn,$recipe_query);
       while($all_recipe = mysqli_fetch_assoc($run_recipe_query))
        
       {?>
    <tr>

        <td><?php echo $all_recipe['id'] ?></td>
        <td><?php echo $all_recipe['title'] ?></td>
        <td><?php echo $all_recipe['tag'] ?></td>
        <td><?php echo $all_recipe['category'] ?></td>
        <td><?php echo $all_recipe['Prep Time'] ?></td>
        <td><?php echo $all_recipe['Cooking Time'] ?></td>
        <td><?php echo $all_recipe['ingredient'] ?></td>
        <td><?php echo $all_recipe['calories'] ?>%</td>
        <td><?php echo $all_recipe['sodium'] ?>%</td>
        <td><?php echo $all_recipe['description'] ?></td>
        <td>
          <a href="delete_recipe.php?id=<?php echo $all_recipe['id'];?>" class=' btn btn-danger'>Delete</a></td>

       <td class="text-center"><?php 
            echo"<a href='edit-recipe.php?id=$all_recipe[id]' class=' btn btn-success'>Edit</a>";
            
                ?>
        </td>

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