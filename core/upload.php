<?php
if(is_array($_FILES)) {
    if(is_uploaded_file($_FILES['userImage']['tmp_name'])) {
        $sourcePath = $_FILES['userImage']['tmp_name'];
        $targetPath = "../images/".$_FILES['userImage']['name'];
            if(move_uploaded_file($sourcePath,$targetPath)) {
        ?>
<img class="image-preview img-fluid" style="width: auto;" src="<?php echo $targetPath; ?>" class="upload-preview" />

<div class="col-md-8">
          <div class="input-group text-center">
          <br><br><br><br>
            <div style="color: black; font-size: auto;border: 2px solid grey; border-radius: 10px;">
	        <h4><?php echo $targetPath; ?></h4>
            </div>
          </div>
        </div><br><br>

<?php
}
}
}
?>
