<?php include('header.php'); ?>
    <!-- end of nav -->
    <main class="page">
         <section class="tags-wrapper">
         <?php 
$tag_query ="SELECT * FROM tags";
$run_tag_query =mysqli_query($conn,$tag_query);
while($tag = mysqli_fetch_assoc($run_tag_query)){
?>
          <!-- single tag -->
              <a href="tag-template.html" class="tag">
                <h5><?php echo $tag['tagName']; ?></h5>
                <p>1 recipe</p>
              </a>
            <!-- end of single tag -->
<?php }?>
            <!-- end of single tag -->
        </section>
    </main>
    <!-- footer -->
    <?php include("footer.php"); ?>