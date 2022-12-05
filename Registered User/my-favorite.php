
<style><?php include '../admin/assets/css/main.css' ?></style>

<?php include('header.php'); ?>

    <!-- end of nav -->
    <!-- main -->
    <main class="page">
      <!-- header -->

      <!-- end of header -->
      <section class="recipes-container">
        <!-- tag container -->
        <div class="tags-container">
          <h4>Cart</h4>
          <div class="tags-list">
            
          </div>
        </div>
        <!-- end of tag container -->
        <!-- recipes list -->
        <div class="recipes-list">
          <!-- single recipe -->
          <?php 
 $email = $_SESSION['email'];
$card_query = "SELECT i.description,i.title,i.image,m.id FROM favorite m INNER JOIN recipe i ON m.recipe_id = i.id";
$card_run_query = mysqli_query($conn, $card_query);
while($view = mysqli_fetch_assoc($card_run_query)){
   $id = $view['id'];
 // echo $id;
// die();
?>
         
          <div class="row">
             <div class="col-lg-4">
              <div class="card" style="width: 18rem;">
                   <img src="../admin/<?php echo $view['image']; ?>" class="card-img-top"
                   style="height:140px;" alt="...">
                        <div class="card-body">
                         <h5 class="card-title"><?php echo $view['title']; ?></h5>
                       <p class="card-text"><?php echo $view['description']; ?></p> 
                       <!-- <a href="booking_form.php?c_id=<?php echo $id;?>">Order Now</a> -->
                       <!-- <a style="margin-left: 110px;" href="delete_card.php?c_id=<?php echo $id;?>" >Delete</a> -->
                         <?php //echo "<a href='booking_form.php' class='btn btn-green'>Order now</a>"; ?>
                     </div>
                   </div>
               </div>
         </div>

<?php }?>
          <!-- end of single recipe -->
   
          <!-- end of single recipe -->
        </div>
        <!-- end of recipes list -->
      </section>
    </main>
    <!-- end of main -->
    <!-- footer -->
    
<?php include("footer.php"); ?>