<?php

 session_start();
 class Database{
	private $localhost;
	private $servername;
	private $password;
	private $dbname;
	protected  $conn;

	public function connect(){
		$this->servername="root";
		$this->localhost="localhost";
		$this->password="";
		$this->dbname="construction";
		$this->conn=mysqli_connect($this->localhost,$this->servername, $this->password ,$this->dbname);
		return $this->conn;
	}
 }

function customError($errno, $errstr) {
		 error_log("[$errno] $errstr",3,"errors.log");
   }
   set_error_handler("customError");



class Employee {
	protected $database = new Database();
	private $username;
	private $password;
	private $fullname;
	private $img;
	//private $id;
	private $type;
	private $address;
	private $mobile;
	private $email;
	private $telephone;
	private $department;
	private $salary;
	private $weekendOvertime;
	private $nightshiftOvertime;
	
	private ViewFeedback(){}
	private login($username,$password){
		$sql="SELECT password FROM employee WHERE username='$username'";
		if($result=mysqli_query($database->connect(),$sql)){
if(mysqli_num_rows($result)>0){
	if($row=mysqli_fetch_assoc($result)){
		
		if($row[0]===$password){
			 echo "<script>alert('successfully loged in');</script>";
                  echo '<script>window.location.href= "hrmanager.php";</script>';

		}
		
	}
	
}

	else{
		
		 echo "<script>alert('USername not Found');</script>";
                  echo '<script>window.location.href= "login.php";</script>';
		
		
	}
			
			
		}else{
			$errorconn=mysqli_error($this->conn);
		            trigger_error("$errorconn");
		}
	}
    public checktype(){}
	private changepassword($password){}
	
}

?>