<?php
 include("../config/connect.php");

if(isset($_POST['submit'])){
	
	$name = $_POST['name'];
	$email= $_POST['email'];
	$position = $_POST['position'];
	$contact = $_POST['contact'];
	$address = $_POST['address'];
	$password = $_POST['password'];
	$encrypt = md5($password);

	
	if($name =='' or $email =='' or $position =='' or $contact =='' or $address =='' or $password =='' ){
		
		echo "<script>alert('Any of the fields is empty')</script>";
		echo "<script>window.open('../signup.php','_self')</script>";
		exit();
	}
	else{
		//move_uploaded_file($image_tmp,"photo/$photo");
		
		$result = "INSERT INTO `member`(`name`, `email`, `position`, `contact`, `adress`, `password`) VALUES ('$name','$email','$position','$contact','$address','$encrypt')";
		
	
	$check = mysqli_query($con,$result);
	if($check){
		echo "<script>alert('Member Create successfully.You need to login for visit...')</script>";
		echo "<script>window.open('../index.php','_self')</script>";
		
	}
	else{
		
		echo "SOmething is wrong!";
	}
}
}
?>