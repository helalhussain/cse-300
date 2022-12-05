<?php 
include("db.php");
$id =  $_GET['id'];
$recipe_query ="SELECT * FROM recipe where id='$id'";
$run_recipe_query =mysqli_query($conn,$recipe_query);
$data=mysqli_fetch_assoc($run_recipe_query);
$sql = "select * from tags";
$result = mysqli_query($conn,$sql);
include("header.php");

$email = $_SESSION['email'];

$log_query ="SELECT * FROM users WHERE email='$email'";
$run_log_query =mysqli_query($conn,$log_query);
$log_result = mysqli_fetch_assoc($run_log_query);

?>
<style type="text/css">
  .review,.Reting{
    margin-left: 30%;
    margin-right: 30%;
}
</style>



<div class="container"><br/>

  <div class="row">
    <div class="col-lg-6">
      <div class="image text-cnter">
      <img src="../admin/<?php echo $data['image'];?>" width="600"/>
      </div>

      <br/><br/>
      <article>
            
          <div>
      <h4>instructions</h4>
              <p class="single-instruction"><?php echo $data['Instructions'];?><br></p>
          </div>  
      </article>




  </div>
<!---Extra-->


    <!---Extra-->
           
    <div class="col-md-1"></div>
    <div class="col-md-5">
      <div class="row">
      <article class="recipe-info">
            <h2><?php echo $data['title'];?></h2>
            <p>
              <?php echo $data['description'];?>
            </p>
            <div class="recipe-icons">
              <article>
                <i class="fas fa-clock"></i>
                <h5>prep time</h5>
                <p><?php echo $data['Prep Time'];?> minutes</p>
              </article>
              <article>
                <i class="far fa-clock"></i>
                <h5>cooking time</h5>
                <p><?php echo $data['Cooking Time'];?> minutes</p>
              </article>
              <article>
                <i class="fas fa-user-friends"></i>
                <h5>serving</h5>
                <p><?php echo $data['Serving'];?> People</p>
              </article>
            </div>
            <p class="recipe-tags">
              Tags :
              <a href="tag-template.html"><?php echo $data['tag'];?></a>
            </p>
          </article>

          <br/><br/><br/><br/>
          </article>
          <article class="second-column">
            <div>
              <h4>ingredients</h4>
              <p class="single-ingredient"><?php echo $data['ingredient'];?></p>
             
            </div>
            <div class="table-responsive">
              <table class="table table-bordered">
                <thead>
                  <tr>
                    <th scope="col">Calories</th>
                    <th scope="col">Choiesterol</th>
                    <th scope="col">Sodium</th>
                    <th scope="col">Protein</th>
                    <th scope="col">Fat</th>
                  </tr>
                </thead>
                <tbody>
                <tr class="">
                    <td scope="row"><?php echo $data['calories'] ?>%</td>
                    <td scope="row"><?php echo $data['cholesterol'] ?>%</td>
                    <td scope="row"><?php echo $data['sodium'] ?>%</td>
                    <td scope="row"><?php echo $data['protein'] ?>%</td>
                    <td scope="row"><?php echo $data['fat'] ?>%</td>
                  </tr>

                </tbody>
              </table>
            </div>
            
          </article>
      </div>
    </div>
  </div>
</div><br/><br/><br/>

<div class="review card p-2">
  <h4 class="">Review and rating</h4>
  <form method="POST">
                            <div class="form-group">
                            <select name="rating" class="form-control">
                                    <option value="">Select Rating</option>
                                    <option value="1" class="text-success font-weight-bold">*</option>
                                    <option value="2">**</option>
                                    <option value="3">***</option>
                                    <option value="4">****</option>
                                    <option value="5">*****</option>
                                </select>
                            </div><br/>
                            <div class="input-group mb-3">
                            <input type="text" name="review" class="form-control"value="<?php ?>" placeholder="Review" required>
                                <div class="input-group-append">
                                    <button type="submit" name="submit" class=" btn btn-success text-white font-weight-bold">
                                    <i class='fas fa-arrow-right' style='font-size:24px;color:white;'></i>
                                </button>
                            </div>
                        </div>
                    </form>

                    <?php
                        if(isset($_POST['submit'])){
                            $UserID = $log_result['id'];
                            $get_id = $_GET['id'];
                        
                            $rating =$_POST['rating'];
                            $review = $_POST['review'];
                            $date =date("h:m:a d-m-Y");
                            $rating = "INSERT INTO review VALUES(NULL,'$UserID','$get_id','$rating','$review','$date')";
                            $rating_run= mysqli_query($conn,$rating);
                            if($rating_run){
                                echo "<script>alert('Rating and review added');</script>";
                
                            }else{
                                echo "<script>alert('Not addedl');</script>";
                
                            }

                        }
                    
                    
                    ?>
</div>


<!-------------------rating and review view--------->  
<div class="card Reting shadow m-5" style="margin-left: 20%;margin-right: 50%;">
                    <div class="d-flex p-1">
                        <h5>Rating and review</h5>
         
                    </div>

                 
  <div class="card-body py-2">
 
      <?php

      $one = "<i class='fas fa-star star-dark text-warning'></i>";
      $two = "<i class='fas fa-star star-dark text-warning'></i><i class='fas fa-star star-dark text-warning'></i>";
      $three= "<i class='fas fa-star star-dark text-warning'></i><i class='fas fa-star star-dark text-warning'></i><i class='fas fa-star star-dark text-warning'></i>";
      $four= "<i class='fas fa-star star-dark text-warning'></i><i class='fas fa-star star-dark text-warning'></i><i class='fas fa-star star-dark text-warning'></i><i class='fas fa-star star-dark text-warning'></i>";
      $five= "<i class='fas fa-star star-dark text-warning'></i><i class='fas fa-star star-dark text-warning'></i><i class='fas fa-star star-dark text-warning'></i><i class='fas fa-star star-dark text-warning'></i><i class='fas fa-star star-dark text-warning'></i>";

      ?>


    <?php 
    $get_id=$_GET['PackageID'];
    $rat_query =  "SELECT SUM(rating) AS rating FROM review WHERE recipe_id='$get_id'";
    $rat_run = mysqli_query($conn,$rat_query);
    $num_of_rows = mysqli_num_rows($rat_run);
    $ave = mysqli_fetch_assoc($rat_run);
    $rating = $ave['rating']/5;

    ?>



<?php
 $get_id=$_GET['id'];

   $review_query =  "SELECT * FROM review WHERE recipe_id='$get_id'";
   $review_run = mysqli_query($conn,$review_query);
 
   while($review = mysqli_fetch_assoc($review_run)){
       
    
     $get_id=$_GET['id'];

if($review['recipe_id'] == $get_id){ ?>
    <div class="card">
       
         <div class="card-header bg-light">
           <div class="row">
         
           <div class="col-lg-5 text-light">
            <?php if($review['rating'] == 1){
                   echo $one;
               }
               if($review['rating'] == 2){
                   echo $two;
               }
                   if($review['rating'] == 3){
                   echo $three;
               }
                   if($review['rating'] == 4){
                   echo $four;
               }
               if($review['rating'] == 5){
                   echo $five;
               }
               else{

               }?>
    </div>
<div class="col-lg-6 text-dark">
    <?php echo $review['review']; ?>
</div>
</div>
</div>
             <?php  }?> 
             <?php } ?>
</div>

              </div>
</div>

 <!-------------------rating and review view--------->







