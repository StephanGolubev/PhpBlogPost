<?php
  include ('includesfl/navafl.php');
  include('../core/config.php');
?>


<?php 
 				$url = $_SERVER['REQUEST_URI']; 
 				$get = (parse_url($url));
 				$var = $get['query'];
				parse_str($var, $output);
				$num = $output['id'];
        $_SESSION['post_id'] = $num;

				$dt = ("SELECT * FROM `post` WHERE id=$num");
				$result = mysqli_query($db,$dt) or die( mysqli_error($db));
				
		  ?>
<div class="container col-lg-8 col-md-12">
  <a href="http://localhost/blog/pages/blog.php" class="btn btn-primary">Go back</a>
</div><br>


<?php 
				  while($row = mysqli_fetch_array($result)){
		 $id = $row['id'];
		 $image = $row['image'];
		 $title = $row['title'];
		 $first = $row['first'];
		 $body = $row['body'];
     echo '<div class="container">
     <div class="row">
         <div class="col-lg-12">
         <div class="col-12" style="text-align: center;">
                 <img src="'.$image.'" class="img-fluid" alt="" style="width:auto;">
             </div><br>
             <div class="col-12" style="height:auto;">
                  '.$title.'
             </div>
             <div class="col-12" style="height:auto;">
                  '.$body.'
         </div>
         </div>
     </div>
   </div>';
				}
       ?>






<br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>

<?php 
echo "<br><br>";
include ('includesfl/footerfl.php'); 
?>