<?php
session_start();
include ('includesfl/navafl.php');
include('../core/config.php');
?>
<div class="container" style="text-align: center;">
<?php
$dt = "SELECT * FROM `post` ORDER BY `created` DESC LIMIT 5";
        // Order by DESC-less or ASC-bigger limit-limits the output!
$result = mysqli_query($db,$dt) or die( mysqli_error($db));
    ?>
<div class="container" style="text-align:center;border:3px solid grey; border-radius: 10px;">
        <?php
         while($row = mysqli_fetch_array($result)){
     $id = $row['id'];
     $title = $row['title'];
     $body = $row['body'];
     echo "<br>";
     echo '<div><h2><strong>'.$title.'</strong></h2></div>';
     echo "<hr>";
     echo '<div><p><strong>'.$body.'</strong></p></div>';
     echo "<hr>";

 }
       ?>
   </div>
</div>
       <?php 
echo "<br><br>";
include ('includesfl/footerfl.php'); 
?>