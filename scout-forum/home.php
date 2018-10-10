<?php
  include("config/connect.php");
  include("config/session.php");
?>
<!doctype html>
<html>
    <head>
        <title>Scout Project</title>
        <link rel="stylesheet" href="css/bootstrap.css">
        <script rel="stylesheet" href="js/bootstrap.js"></script>
    </head>
    <body>
        <div class="container">
            <nav class="navbar navbar-expand-md bg-dark navbar-dark">
              <!-- Brand -->
              <a class="navbar-brand" href="#">Socuting</a>

              <!-- Toggler/collapsibe Button -->
              <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#collapsibleNavbar">
                <span class="navbar-toggler-icon"></span>
              </button>

              <!-- Navbar links -->
              <div class="collapse navbar-collapse" id="collapsibleNavbar">
                <ul class="navbar-nav">
                  <li class="nav-item">
                    
                    <a class="nav-link" href="home.php">Home</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="member-list.php">Member List</a>
                
                  </li>
                  <li class="nav-item">
                   <form class="form-inline" action="search-result.php" method="POST">
                        <input class="form-control mr-sm-2" type="text" placeholder="Search" name="search">
                        <button class="btn btn-success" type="submit" name="search">Search</button>
                   </form>
                  </li>
                </ul>
              </div> 
              <div class="collapse navbar-collapse" id="collapsibleNavbar">
                <ul class="navbar-nav">
                  <li class="nav-item">
                    <a class="nav-link" href="logout.php">LOGOUT</a>
                  </li>
                </ul>
              </div> 
				<div class="collapse navbar-collapse" id="collapsibleNavbar">
                <ul class="navbar-nav">
                  <li class="nav-item">
                    <a class="nav-link" href="logoutTwo.php">LOGOUT-2</a>
                  </li>
                </ul>
              </div> 
            </nav>
        </div>
        <div class="container" style="padding-bottom: 40px;">
        <hr/> 
        <?php
        if(isset($_POST['submit'])){
				
				$post = $_POST['post'];
				$email = $_SESSION['email'];
				if($post ==''){
					
					echo "<script>alert('Any of the fields is empty')</script>";
					exit();
				}
				else{
					//move_uploaded_file($image_tmp,"photo/$photo");
					
					$result = "INSERT INTO `status`(`post`,`date`, `post_by`) VALUES ('$post',NOW(),'$email')";
					
				
				$check = mysqli_query($con,$result);
				if($check){
					// echo "<script>alert('Member Create successfully.You need to login for visit...')</script>";
					echo "<script>window.open('home.php','_self')</script>";
					
				}
				else{
					
					echo "Something is wrong!";
				}
			}
			}
        ?>
            <div class="card border-info">
              <div class="card-body">
                <form action="" method="POST">
                  <div class="form-group">
					  <label>Status</label>
					  <textarea class="form-control" rows="5" id="comment" name="post"></textarea>
					</div>
                  <input type="submit" name="submit" value="POST" class="btn btn-primary">
                </form>
                
              </div>
            </div>  
            <br>
            <div class="card border-info">
              <div class="card-body">
                      <?php
                      
                         $select_post = "SELECT * FROM `status` ORDER BY 1 DESC";
                         $run_post = mysqli_query($con,$select_post );
                                    //use for catch data from database
                         while($row = mysqli_fetch_array($run_post)){
                           $post = $row['post'];
                           $date = $row['date'];
                           $post_by = $row['post_by'];

                        ?>

              

                                <p><?php echo $post; ?></p>
                                <span class="cd-date" style="color: purple;">Post By : <?php echo $post_by; ?></span>
                                <span class="cd-date" style="color: indigo;">Post By : <?php echo $date; ?></span>

                                <hr/>
                                 <?php } ?>
                        

                
              </div>
            </div>                     
              
        </div>
        
        <div class="container">
            <div class="footer">
              <p>Design &copy; Nipa</p>
            </div>
        </div>
        
        
        
        <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
    </body>
</html>