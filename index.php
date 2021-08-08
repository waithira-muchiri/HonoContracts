<?php include_once('form.php') ?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title></title>
  <!-- Bootstrap CSS -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.0.0/css/bootstrap.min.css" />
  <link rel="stylesheet" href="style.css">
</head>
<body>
  <div class="container">
    <div class="row">
        
      <div class="col-8 offset-md-2 form-div">
        
        <form action="index.php" method="post" enctype="multipart/form-data">
            <div class="logo">
                <img src="honologo.svg" width="150px;" height="150px;"><i style="color:white;">contracts</i>
            </div>
            
          <h2 class="text-center" style="color:white;">Login</h2>
          <?php if (!empty($msg)): ?>
            <div class="alert <?php echo $msg_class ?>" role="alert">
              <?php echo $msg; ?>
            </div>
          <?php endif; ?>
         
          <div class="form-group">
            <input type="email" placeholder="Email" name="email" required>
          </div>
            
            <div class="form-group">
            <input type="password" placeholder="Password" name="password" required>
          </div>
            
            
          <div class="form-group">
            <button type="submit" name="login" class="btn btn-primary btn-block">Login</button>
          </div>
        </form>
      </div>
    </div>
  </div>
</body>
</html>
