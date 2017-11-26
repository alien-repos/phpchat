<!DOCTYPE html>
<html lang="en">
<head>
  <title>C H A T</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</head>
<body style="background-image: url('http://78.media.tumblr.com/34c0b0eff35fd0a69aa9ac91eb169b2e/tumblr_inline_nilpg1tCnX1rb3pzn.png');">

<div class="container">
  <h2 style="text-align: center; color: #fff">C H A T</h2>
  <form class="form-horizontal" method="POST" action="verify.php">
    <div class="form-group">
      <label class="control-label col-sm-2" for="user" style="color: #fff">Name:</label>
      <div class="col-sm-10">
        <input type="text" class="form-control" id="user" placeholder="Name" name="user">
      </div>
    </div>
    <div class="form-group">
      <label class="control-label col-sm-2" for="pwd" style="color: #fff">Password 1:</label>
      <div class="col-sm-10">          
        <input type="password" class="form-control" id="pwd_2" placeholder="Enter password" name="pwd_2">
      </div>
    </div>
        <div class="form-group">
      <label class="control-label col-sm-2" for="pwd" style="color: #fff">Password 2:</label>
      <div class="col-sm-10">          
        <input type="password" class="form-control" id="pwd_3" placeholder="Enter password" name="pwd_3">
      </div>
    </div>
    <!-- <div class="form-group">        
      <div class="col-sm-offset-2 col-sm-10">
        <div class="checkbox">
          <label><input type="checkbox" name="remember"> Remember me</label>
        </div>
      </div> -->
      <br>
      <br>
    </div>
    <div class="form-group">        
      <div class="col-sm-offset-6 col-sm-10">
        <button type="submit" class="btn btn-primary btn-block">L O G I N</button>
      </div>
    </div>
  </form>
</div>

</body>
</html>
