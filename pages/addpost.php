<?php
   include('../core/config.php');

?>
<!DOCTYPE html>
<html>
<head>
  <meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Help my russian!</title>
  <meta charset="utf-8">
  
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css" integrity="sha384-GJzZqFGwb1QTTN6wy59ffF1BuGJpLSa9DkKMp0DgiMDm4iYMj70gZWKYbI706tWS" crossorigin="anonymous">
  <link rel="stylesheet" type="text/css" href="../css/first.css">
    <link rel="stylesheet" type="text/css" href="../css/second.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <!-- <link rel="stylesheet" type="text/css" href="css/pages.css"> -->
    <script type="text/javascript">
$(document).ready(function (e) {
	$("#uploadForm").on('submit',(function(e) {
		e.preventDefault();
		$.ajax({
        	url: "../core/upload.php",
			type: "POST",
			data:  new FormData(this),
			contentType: false,
    	    cache: false,
			processData:false,
			success: function(data)
		    {
			$("#targetLayer").html(data);
		    },
		  	error: function() 
	    	{
	    	} 	        
	   });
	}));
});
</script>
<style>
body {
font-family: Arial;
font-size: 14px;
}
.bgColor {
max-width: auto;
height:auto;
/* background-color: #fff4be; */
border-radius: 4px;
}
.bgColor label{
font-weight: bold;
color: #A0A0A0;
}
#targetLayer{
/* float:left;
width:150px;
height:150px; */
height:auto;
width:auto;
text-align:center;
/* line-height:150px; */
font-weight: bold;
color: #C0C0C0;
/* background-color: #F0E8E0; */
border-bottom-left-radius: 4px;
border-top-left-radius: 4px;
}
#uploadFormLayer{
	float:left;
	padding: 20px;
}
.btnSubmit {
	background-color: #696969;
    padding: 5px 30px;
    border: #696969 1px solid;
    border-radius: 4px;
    color: #FFFFFF;
    margin-top: 10px;
}
.inputFile {
	padding: 5px;
	background-color: #FFFFFF;
	border:#F0E8E0 1px solid;
	border-radius: 4px;
}
.image-preview {	
width:auto;
height:auto;
border-bottom-left-radius: 4px;
border-top-left-radius: 4px;
}

</style>
</head>

<body id="body">
<header>
		<div class="container-fluid"  style="height:200px;">
  	<div class="row">
  		<div class="col-sm" style="text-align: center;">
  			<img id="logo" src="../images/logo.png" alt="Logo" style="margin-top: 20px;height: 150px; width: 150px;">
  		</div>
  		<div class="col-md" id="hello" style="text-align: center;color: #737373; margin-top: 50px;">
  			<h1><p>Help my Russian</p></h1>
  		</div>
  	</div>
</div>
</header>
<nav class="navbar navbar-expand-xl navbar-collapse-md flex-column -row bd-navbar navbar-light bg-light" data-toggle="collapse" id="nava">
  <button class="navbar-toggler bg-dark" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarTogglerDemo01" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="navbarNav">

    <ul class="navbar-nav bd-navbar-nav mr-auto mt-2 mt-lg-0">
      <li class="nav-item active">
        <h3><a class="nav-link" href="../index.php">Home <span class="sr-only">(current)</span></a></h3>
      </li>
      <li class="nav-item">
        <h3><a class="nav-link" href="breakthrough-club.php">Breakthrough Club</a></h3>
      </li>
      <li class="nav-item">
        <h3><a class="nav-link" href="courses.php">Courses</a></h3>
        </li>
        <li class="nav-item">
        <h3><a class="nav-link" href="blog.php">Blog</a></h3>
      </li>
      <li class="nav-item">
        <h3><a class="nav-link" href="exercises.php">Exercises</a></h3>
        </li>
      <li class="nav-item">
        <h3><a class="nav-link" href="videos.php">Videos</a></h3>
        </li>
    </ul>
  </div>
</nav>

  <body class="bg-light">
    <div class="container">
  <div class="py-5 text-center">
    <h2>Creating new post</h2>
    </div>
  
    <div class="bgColor container">
<form id="uploadForm" action="upload.php" method="post">
<div id="targetLayer">No Image</div>
<div id="uploadFormLayer">
<input name="userImage" type="file" class="inputFile" /><br/>
<input type="submit" value="Submit" class="btnSubmit" />
</form>
</div>
</div>

<hr>
<form method="post" action="../core/postcreator.php">

      <div class="mb-3">
          <label for="username">Title of your new post</label>
          <div class="input-group">
            <input name="img" type="text" class="form-control" id="img" placeholder="Put that img link here" required>
          </div>
        </div>

        <div class="mb-3">
          <label for="username">Title of your new post</label>
          <div class="input-group">
            <input name="title" type="text" class="form-control" id="title" placeholder="Title" required>
          </div>
        </div>

        <div class="mb-3">
          <label for="username">Title of your new post</label>
          <div class="input-group">
            <input name="first" type="text" class="form-control" id="header" placeholder="Header of your post" required>
          </div>
        </div>

        <div class="mb-3">
          <label for="text">Blog text</label>
          <input name="body" id="textinput" type="text" class="form-control" id="body" placeholder="Body" required>
        </div>
        <button id="button" class="btn btn-primary btn-lg btn-block" id="agree" type="submit">Post my blog!</button>
        </form>



  <footer class="my-5 pt-5 text-muted text-center text-small">
    <p class="mb-1">&copy;Stephans site</p>
  </footer>
</div>

</body>
</html>
