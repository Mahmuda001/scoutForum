<!doctype html>
<html>
    <head>
        <title>Scout Project|LOGIN</title>
        <link rel="stylesheet" href="css/bootstrap.css">
        <script rel="stylesheet" href="js/bootstrap.js"></script>
    </head>
    <body>
        <div class="container" style="margin-top: 17%;">
            <div class="card border-info">
              <div class="card-header">LOGIN</div>
              <div class="card-body">
                <form action="process/login-process.php" method="POST">
                  <div class="form-group">
                    <label for="exampleInputEmail1">Email address</label>
                    <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter email" name="email">
                  </div>
                  <div class="form-group">
                    <label for="exampleInputPassword1">Password</label>
                    <input type="password" class="form-control" id="exampleInputPassword1" placeholder="Password" name="password">
                  </div>
                  <input type="submit" name="submit" value="LOGIN" class="btn btn-primary">
                </form>
                <small>If you have not registered please make sure your registration...  <a href="signup.php">Sign Up</a></small>
                
              </div>
            </div>
        </div>
    </body>
</html>