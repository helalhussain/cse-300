<?php 
include 'db.php';
$id = $_GET['id'];
$delete_query = "DELETE from recipenews  WHERE id='$id'";
$run = mysqli_query($conn,$delete_query);
if($run){?>

<META HTTP-EQUIV="Refresh" CONTENT="0; URL=http://localhost/RecipeBD/admin/all-food-news.php"> 
<?php }
?>