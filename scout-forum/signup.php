<!doctype html>
<html>
    <head>
        <title>Scout Project|SIGN UP</title>
        <link rel="stylesheet" href="css/bootstrap.css">
        <script rel="stylesheet" href="js/bootstrap.js"></script>
    </head>
    <body>
        <div class="container" style="margin-top: 8%;">
            <div class="card border-info">
              <div class="card-header">SIGN UP</div>
              <div class="card-body">
                <form action="process/signup-process.php" method="POST">
                <div class="form-group">
                    <label for="name">Full Name </label>
                    <input type="text" class="form-control" id="fullname" aria-describedby="name" placeholder="Enter Full Name" name="name">
                  </div>
                  <div class="form-group">
                    <label for="exampleInputEmail1">Email address</label>
                    <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter email" name="email">
                  </div>
                  <div class="form-group">
                    <label for="position">Position </label>
                    <input type="text" class="form-control" id="position" aria-describedby="posotion" placeholder="Enter Position" name="position">
                  </div>
                 <div class="form-group">
                    <label for="contact">Contact </label>
                    <input type="text" class="form-control" id="contact" aria-describedby="contact" placeholder="Enter Contact Number" name="contact">
                  </div>
                  <div class="form-group">
                    <label for="address">Address </label>
                    <input type="text" class="form-control" id="address" aria-describedby="address" placeholder="Enter Address" name="address">
                  </div>
                  <div class="form-group">
                    <label for="exampleInputPassword1">Password</label>
                    <input type="password" class="form-control" id="exampleInputPassword1" placeholder="Password" name="password">
                  </div>
                  <input type="submit" name="submit" class="btn btn-primary" value="SIGNUP">
                </form>
                <small>If you have registered please make sure your Login... <a href="index.php">Login</a></small>
                
              </div>
            </div>
        </div>
    </body>
</html>