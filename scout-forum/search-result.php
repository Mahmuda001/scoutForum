<?php
  include("config/connect.php");
  include("config/session.php");
?>
<?php
if(!isset($_POST['search'])){
  header("Location:index.php");
}

$search_qul = "SELECT * FROM member WHERE name LIKE '%".$_POST['search']."%' ";
$search_query = mysqli_query($con, $search_qul);
if(mysqli_num_rows($search_query)!=0){
$search_rs = mysqli_fetch_assoc($search_query);
}

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
                   <form class="form-inline" action="search-result.php" method="POST">
                        <input class="form-control mr-sm-2" type="text" placeholder="Search" name="search">
                        <button class="btn btn-success" type="submit" name="search">Search</button>
                   </form>
                  </li>
                </ul>
              </div> 
            </nav>
        </div>
        <div class="container" style="padding-bottom: 40px;">
          <h3 style="padding-top: 10px;">Your Search Result</h3><hr/>
           <div class="list-group">
                    <?php
                          if(mysqli_num_rows($search_query)!=0){
                            do{
                              ?>
                              <a href="#" class="list-group-item list-group-item-action"><?php echo $search_rs['name']; ?></a>
                              <?php 
                            } while ($search_rs = mysqli_fetch_assoc($search_query));
                          }
                          else
                          {
                           echo '<p class="list-group-item list-group-item-action">No Result</p>';
                          }

                      ?>
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