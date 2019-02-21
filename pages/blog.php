<?php
	include('../core/config.php');
	include ('includesfl/navafl.php');
	
	$dt = "SELECT * FROM `post`";
	$dt2 = "SELECT * FROM `post` ORDER BY `created`";
	$result = mysqli_query($db,$dt) or die( mysqli_error($db));
	$result2 = mysqli_query($db,$dt2) or die( mysqli_error($db));
	
?>
<?php
	
?>

<div class="container">
	<div class="row">
		<div class="col-lg-8 col-sm-12"style="background-color:;height:auto;">
			<div class="container" style="background-color:;height: auto;margin:10px 0px;">
				<div class="row">
				  <?php 
				  while($row = mysqli_fetch_array($result)){
		 $id = $row['id'];
		 $image = $row['image'];
		 $title = $row['title'];
		 $first = $row['first'];
		 $body = $row['body'];
		 $get = array("id"=>"{$row['id']}");
		 $out = http_build_query($get);
		 $url = "http://localhost/test/pages/blogdetail.php?".$out."";
					echo '<div class="col-lg-6" style="margin-top:20px;">
					<div class="card border-dark">';
					if ($row['image'] == NULL) {
					}else{
						echo '<img class="card-img-top" src="'.$image.'" alt="Card image cap" style="margin-top:5px;height:auto;">';
					}
					echo '
					  <div class="card-body">
						<h3 class="card-title">'.$title.'</h3>
						<p class="card-text">'.$first.'</p>
						<a href="'.$url.'" class="btn btn-primary">Read more</a>
					  </div>
					</div>
					</div>';
				}
       ?>
				</div>
				<img src="" alt="" style="height:auto;">
			</div>
		</div>
		<div class="col-lg-4 col-sm-12" style="height:auto;">
		<div style="text-aling:center;">
			<h2>Recent posts</h2>
		</div>
		
		<?php 
			 while($row = mysqli_fetch_array($result2)){
				$title = $row['title'];
				$get = array("id"=>"{$row['id']}");
		 		$out = http_build_query($get);
		 		$url = "http://localhost/test/pages/blogdetail.php?".$out."";
				echo '<div class="card" style="margin-top:20px;">
				<div class="card-body">
				  <h5 class="card-title"><a href="'.$url.'">'.$title.'</a></h5>
				</div>
			  </div>';
			}
		?>
		</div>
	</div>
</div>




<?php 
echo "<br><br>";
include ('includesfl/footerfl.php'); 
?>