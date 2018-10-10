 <!-- this will be added to every page  -->
<?php 

session_start();
$email = $_SESSION['email'];
// $em_id = $_SESSION['id'];


if(!isset($_SESSION['email'])){
  header("location: index.php");

}

?>


<!-- for logout -->







<!-- add this to login process -->


<!-- 


  if($count == 1){


    header("location: ../home.php");
   


    session_start();
    
    $_SESSION['id'] = $id;
    $_SESSION['username'] = $username;
    $_SESSION['name'] = $name;
    $_SESSION['status'] = $status;
    $_SESSION['privileges'] = $privileges;

 
     
    exit();

  }

  else{
    echo "<script> alert(' Incorrect information, try again !!') </script>";
    echo "<script> window.open('../index.php','_self'); </script>";



    } -->