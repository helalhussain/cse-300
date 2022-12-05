<?php include('header.php'); ?>
    <main class="page">
      <section class="recipes-container">

        <div class="tags-container">
          
          <div class="tags-list">
           <h4><a href="gift-card.php">Gift Card</a></h4>
           <h4><a href="purchase-gift-cards.php">Purchased Gift Cards</a></h4>
          </div>
        </div>
         
          <div class="col-lg-6 ">
          
          <div class="card p-3 bg-light">
      

                    <div class="col-lg-6 mx-auto">
<?php 
 $email = $_SESSION['email'];
$gift_card_query ="SELECT * FROM gift_card WHERE user_id='$email'";
$run_gift_card_query =mysqli_query($conn,$gift_card_query);
$gift_result = mysqli_fetch_assoc($run_gift_card_query);

$gift_price ="SELECT * FROM add_gift_card ";
$run_gift_price =mysqli_query($conn,$gift_price);

?>

                        
                          <div class="row">
                             <label for="cars"><h4>Choose a Card:</h4></label>

                              <select id="cars" name = "d">
                                <?php while($gift_priceresult = mysqli_fetch_assoc($run_gift_price)){?>
                                <option value="<?php echo $gift_priceresult['id'];?>"><?php echo $gift_priceresult['price'];?>TK</option>
                                <?php } ?>
                              </select>
                          </div><br>
                       
                         <?php 
            echo"<a id='add-gift-card' href='all-gift-card.php'  class=' btn btn-success'>Apply for the card</a>";
             
                ?>
                        

                       
                   </div>
                   <input value='<?php echo $email; ?>' hidden id='user'>
                   
            </div>
          </div>
          
        </div>
      </section>
    </main>

    <footer class="page-footer">
      <p>
        &copy; <span id="date"></span>
        <span class="footer-logo">RecipeBD</span>
      </p>
    </footer>
    <script src="./js/app.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.5/dist/umd/popper.min.js" integrity="sha384-Xe+8cL9oJa6tN/veChSP7q+mnSPaj5Bcu9mPX5F5xIGE0DVittaqT5lorf0EI7Vk" crossorigin="anonymous"></script>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.min.js" integrity="sha384-kjU+l4N0Yf4ZOJErLsIcvOU2qSb74wXpOhqTvwVx3OElZRweTnQ6d31fXEoRD1Jy" crossorigin="anonymous"></script>
<script src="https://code.jquery.com/jquery-3.6.1.min.js" integrity="sha256-o88AwQnZB+VDvE9tvIXrMQaPlFFSUTR+nldQm1LuPXQ=" crossorigin="anonymous"></script>
  </body>
  <script>
     $(document).ready(function(){
        $("#add-gift-card").click(function(){
           var giftvalue = $('#cars').val();
           var email = $('#user').val();
           
           
           $.ajax({
             url: "store-gift-card.php", 
             type: 'post',
             data: {
              giftvalue:giftvalue,
              email:email
             },
             success: function(data){
                if(data == 1){
                  alert('successfull');
                }
             }
          });
           
        });
     });
  </script>
</html>
