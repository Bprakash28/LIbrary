<?php include_once('./includes/header.php'); clearstatcache();?>

    <div class="inner cover">
      <h1 class="cover-heading">Search For Your favourite Books</h1>
      <p class="lead">
        <form action="./controllers/search.php" method="POST">
          <div class="form-group row">
            <label for="searchBar" class="col-sm-2 col-form-label">TypeIn</label>
            <div class="col-sm-10">
              <input type="text" class="form-control" id="query" name="query" placeholder="Search" required>
            </div>
          </div>
         
          <div class="form-group row">
            <div class="col-sm-10">
              <input type="submit" class="btn btn-primary">
            </div>
          </div>
        </form>
      </p>
    </div>
        
        <?php include_once('./includes/footer.php');?> 
</html>