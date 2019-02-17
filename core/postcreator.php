<?php 
session_start();
include('../core/config.php');

?>
<?php 

$img = mysqli_real_escape_string($db, $_POST['img']); 
$til = mysqli_real_escape_string($db, $_POST['title']);
$fir = mysqli_real_escape_string($db, $_POST['first']);
$article_code = mysqli_real_escape_string($db, $_POST['body']); 
$article_code = addslashes($article_code);

$sql = "INSERT INTO post (`image`,`title`,`first`, `body`) VALUES ('$img','$til','$fir', '$article_code')";

if ($db->query($sql)==TRUE) {
	echo "<br> New record made succsessfuly";
} else {
	echo "Error" . $sql . "<br>" . $conn->error;
}

