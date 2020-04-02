 <?php
 $localhost = "localhost";
$name = "root";
$password ="";
$dbname ="hr";
$conn = mysqli_connect($localhost,$name,$password,$dbname);


$id= $_GET['id'];
$usql=" UPDATE `employee` SET
`deactivate`=1 
 WHERE `id`='".$id."'";
 $result= mysqli_query($conn, $usql);
 
 if($result){
	header("Location: hrmanager.php");
}
else{
	echo mysqli_error($conn);
}

?>
