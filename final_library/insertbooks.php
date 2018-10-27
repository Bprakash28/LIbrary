<?php include('./includes/header.php'); clearstatcache();?>

<div class="site-wrapper">

<div class="site-wrapper-inner">

  <div class="cover-container">

    <div class="masthead clearfix">
      <div class="inner">
        <h3 class="masthead-brand">ISM-LIB</h3>
      </div>
    </div>
    <div class="inner cover">
     
      <p class="lead">
      <form action="./controllers/insert.php" method="post">
      <div class="form-group">
    <label for="ISBN">Enter ISBN</label>
    <input type="text" class="form-control" name="isbn"  placeholder="Enter ISBN" required>
  </div>
  <div class="form-group">
    <label for="ISBN">Enter Title</label>
    <input type="text" class="form-control" name="title" placeholder="Enter name" required>
  </div>
  <div class="form-group">
    <label for="ISBN">Enter Author:</label>
    <input type="text" class="form-control" name="author" placeholder="Enter author" required>
  </div>
  <div class="form-group">
    <label for="ISBN">Enter Edition:</label>
    <input type="text" class="form-control" name="edition" placeholder="Enter edition" required>
  </div>
  <div class="form-group">
    <label for="ISBN">Enter Publication:</label>
    <input type="text" class="form-control" name="publication" placeholder="Enter publication" required>
  </div>
  <div class="form-group">
    <label for="ISBN">Enter shelf:</label>
    <input type="text" class="form-control" name="shelf" placeholder="Enter shelf" required>
  </div>
  <div class="form-group">
    <label for="ISBN">Enter floor:</label>
    <input type="text" class="form-control" name="floor" placeholder="Enter floor" required>
  </div>
  <input type="submit" value="submit" class="btn btn-primary">
   <input type="reset" value="Reset" class="btn btn-warning">
</form>
      </p>
</div>