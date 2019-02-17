<?php
   include('../core/config.php');
   include ('includesfl/navafl.php');

?>

  <body class="bg-light">
    <div class="container">
  <div class="py-5 text-center">
    <h2>Creating new post</h2>
    </div>

    <form method="post" action="../core/postcreator.php">

      <div class="mb-3">
          <label for="username">Put img link here</label>
          <div class="input-group">
            <input name="img" type="text" class="form-control" id="title" placeholder="Img href!">
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
            <input name="first" type="text" class="form-control" id="title" placeholder="Header of your post" required>
          </div>
        </div>

        <div class="mb-3">
          <label for="text">Blog text</label>
          <input name="body" id="textinput" type="text" class="form-control" id="address" placeholder="Body" required>
        </div>
        <button id="button" class="btn btn-primary btn-lg btn-block" type="submit">Post my blog!</button>
        </form>

  <footer class="my-5 pt-5 text-muted text-center text-small">
    <p class="mb-1">&copy;Stephans site</p>
  </footer>
</div>
</body>
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.6/umd/popper.min.js" integrity="sha384-wHAiFfRlMFy6i5SRaxvfOCifBUQy1xHdJ/yoi7FRNXMRBu5WHdZYu1hA6ZOblgut" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/js/bootstrap.min.js" integrity="sha384-B0UglyR+jN6CkvvICOB2joaf5I4l3gm9GU6Hc1og6Ls7i6U/mkkaduKaBhlAXv9k" crossorigin="anonymous"></script>
</html>
<?php 
echo "<br><br>";
include ('includesfl/footerfl.php'); 
?>