<?php
session_start();

$localhost = "localhost";
$name = "root";
$password ="";
$dbname ="hr";

$conn = mysqli_connect($localhost,$name,$password,$dbname);
echo"sccszzsa";
if (isset($_POST['submit'])){
	

$username=$_POST['name'];
$password=$_POST['pass'];

echo $username;
echo $password;

$sql="SELECT * FROM employee WHERE username='$username' AND password='$password' AND deactivate='0'";

if($result = mysqli_query($conn, $sql)){
			  		
    if(mysqli_num_rows($result) > 0){
        while($row = mysqli_fetch_array($result)){
			
	echo "<script>alert('Logged in Successfully');</script>";
  $acctype = $row['position'];
  
  if( $acctype == '2'){
	   echo '<script>window.location.href= "hrmanager.php";</script>';
	  }
	  else if($acctype=='1' ){
	   echo '<script>window.location.href= "requests.html";</script>';
	  }
	   else if($acctype=='' ){
	   echo '<script>window.location.href= "Projectmanager.html";</script>';
	  }
	  else{
		 echo '<script>window.location.href= "myprojects.html";</script>';
	  }

	
 }
	}
	else
	{
		echo "<script>alert('Wrong username or password.');</script>";
	}
}
 }
 
?>