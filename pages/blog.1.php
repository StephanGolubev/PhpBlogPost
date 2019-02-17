<?php
  include ('includesfl/navafl.php');
?>


<div class="container">
	<div class="row">
		<div class="col-lg-8 col-sm-12"style="background-color:;height:auto;">
			<div class="container" style="background-color:;height: auto;margin:10px 0px;">
				<div class="row">
				  <?php 
				 for ($i=0; $i < 6; $i++) { 
					echo '<div class="col-lg-6" style="margin-top:20px;">
					<div class="card border-dark">
					<img class="card-img-top" src="../images/a-y.jpg" alt="Card image cap" style="margin-top:5px;height:160px;">
					  <div class="card-body">
						<h3 class="card-title">Title</h3>
						<p class="card-text">Text</p>
						<a href="#" class="btn btn-primary">Go somewhere</a>
					  </div>
					</div>
				  </div>';
				 } 
				  ?>
				</div>
			</div>
		</div>
		<div class="col-lg-4 col-sm-12" style="height:auto;">
		<div style="text-aling:center;">
			<h2>Recent posts</h2>
		</div>
		
		<?php 
			for ($i=0; $i < 6; $i++) { 
				echo '<div class="card" style="margin-top:20px;">
				<div class="card-body">
				  <h5 class="card-title"><a href="#"> Card title</a></h5>
				  <p class="card-text">With supporting text below as a natural lead-in to additional content.</p>
				</div>
			  </div>';
			}
		?>
		</div>
	</div>
</div>



























<br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>
<br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>
<br><br><br><br><br><br>
<?php 
echo "<br><br>";
include ('includesfl/footerfl.php'); 
?>