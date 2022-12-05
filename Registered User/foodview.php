<?php 
include 'db.php';
$sql ="SELECT * FROM recipenews";
$result =mysqli_query($conn,$sql);

?>
<style><?php include '../admin/assets/css/main.css' ?></style>

<?php include('header.php'); ?>
		<!-- https://media.istockphoto.com/photos/culinary-background-with-spices-and-recipe-book-picture-id607299402?k=20&m=607299402&s=612x612&w=0&h=kyjzviV27vVh7UpW1gj_jUm26umMdS17NJvhz4wls8s= -->
		
		<section class="top__blog">
			<div class = "container">
				<div class = "row">
					<div class = "col text-center my-4">
						<h1 class = "fs-2">Food News</h1>
						<div class = "underline mx-auto mt-3"></div>
					</div>
				</div>
	<?php 
$recipe_query ="SELECT * FROM recipenews";
$run_recipe_query =mysqli_query($conn,$recipe_query);
while($recipe = mysqli_fetch_assoc($run_recipe_query)){
?>	
				
		    
				<div class = "row justify-content-center g-4" id = "product-list">
				<?php  while($row=mysqli_fetch_assoc($result)){?>
					<div class = "col-lg-4 col-md-6 electronic">
						<div class = "product-item">
							<div class = "product-img">
								<img src = "../admin/<?php echo $row['image_1'];?>"  class = "img-fluid d-block mx-auto" style="height:200px;width:300px;">
							</div>
							<div class = "product-content text-center py-3">
								<a href="view-foodnews.php?id=<?php echo $row['id']; ?>"><?php echo $row['title'];?></a>
								<span class = "d-block text-uppercase fw-bold" style="text-align:justify;font-size:12px;"><?php echo $row['description'];?></span>
								
							</div>
						</div>
					</div>
				<?php } }?>
		
					
					
		
					
				</div>
			</div>
		</section>
		
		<script
			src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js"
			integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2"
			crossorigin="anonymous"
		></script>
		<script
			src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/js/all.min.js"
			integrity="sha512-6PM0qYu5KExuNcKt5bURAoT6KCThUmHRewN3zUFNaoI6Di7XJPTMoT6K0nsagZKk2OB4L7E3q1uQKHNHd4stIQ=="
			crossorigin="anonymous"
			referrerpolicy="no-referrer"
		></script>
		<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js" integrity="sha512-894YE6QWD5I59HgZOGReFYm4dnWc1Qt5NtvYSaNcOP+u1T9qYdvdihz0PPSiiqn/+/3e7Jo4EaG7TubfWGUrMQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <!-- isotope plugin -->
    <script src="https://unpkg.com/isotope-layout@3/dist/isotope.pkgd.js"></script>
	<script>
		var $grid = $('#product-list').isotope({
  // options
});
// filter items on button click
$('.filter-button-group').on( 'click', 'button', function() {
  var filterValue = $(this).attr('data-filter');
  $grid.isotope({ filter: filterValue });
});
	</script>
	</body>
</html>
