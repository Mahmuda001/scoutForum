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
            </nav>
        </div>
        <div class="container" style="padding-bottom: 40px;">
            <h2>Scouting</h2><hr/>
              <p>Scouting or the Scout Movement is a movement that aims to support young people in their physical, mental and spiritual development, that they may play constructive roles in society, with a strong focus on the outdoors and survival skills. During the first half of the twentieth century, the movement grew to encompass three major age groups for boys (Cub Scout, Boy Scout, Rover Scout) and, in 1910, a new organization, Girl Guides, was created for girls (Brownie Guide, Girl Guide and Girl Scout, Ranger Guide). It is one of several worldwide youth organizations:</p><hr/>  

                                          
              <table class="table table-dark table-striped">
                <thead>
                  <tr>
                    <th>Full Name</th>
                    <th>Email</th>
                    <th>Position</th>
                    <th>Contact</th>
                    <th>Address</th>
                  </tr>
                </thead>
                  <?php 

                    $query = "SELECT * FROM `member` order by 1 DESC";

                    $run = mysqli_query($con,$query);
                    while($row=mysqli_fetch_array($run)){

                    $name = $row['name'];
                    $email = $row['email'];
                    $position = $row['position'];
                    $contact=$row['contact'];
                    $address = $row['adress'];
                                               

                    ?>
                <tbody>
                  <tr>
                    <td><?php echo $name; ?></td>
                    <td><?php echo $email; ?></td>
                    <td><?php echo $position; ?></td>
                    <td><?php echo $contact; ?></td>
                    <td><?php echo $address; ?></td>
                  </tr>
                   <?php } ?>
                </tbody>
              </table>
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