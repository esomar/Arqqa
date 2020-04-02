
<?php

include("classes.php");
		$database = new Database();
		
if(isset($_POST['submit'])){

	$id= $_POST['id'];
	$fullname=$_POST['fullname'];
	$address=$_POST['address'];
	$mobile=$_POST['mobile'];
	$telephone=$_POST['telephone'];
	$department=$_POST['department'];
	$username=$_POST['username'];
	$password=$_POST['password'];
	$email=$_POST['email'];


$usql=" UPDATE `employee` SET

 `fullname`='".$fullname."'

 ,`address`='".$address."'
 ,`mobile`='".$mobile."'
 ,`telephone`='".$telephone."'
 ,`department`='".$department."'
 ,`username`='".$username."'
 ,`password`='".$password."'
 ,`email`='".$email."'
 
 WHERE `id`='".$id."'";



if($result=mysqli_query($database->conn,$usql)){
	header("Location: hrmanager.php");
	

//	echo 'success';
}
else{
	echo mysqli_error($conn);
}}
?>
