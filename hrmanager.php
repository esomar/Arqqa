<html>
<style>
.container {
display: grid;
  grid-template-columns: repeat(3, 1fr);
  grid-gap: 10px;
  grid-auto-rows: minmax(100px, auto);
}
.logout{
width: 186px;
height: 50px;
border-radius: 4px;
background: #43425d;
border: 1px solid #43425d;
font-family: "Source Sans Pro";
font-weight: normal;
font-size: 18px;
text-align: center;
color: #fff;

}

.button{width: 148px;
height: 48px;
border-radius: 4px;
background: #a31919;
border-color:#a31919;
font-family: "Source Sans Pro";
font-weight: normal;
font-size: 18px;
text-align: center;
color: #fff;

}
.button:hover{
background: #fe0303;

}

.viewbutton{
	width: 148px;
height: 48px;
border-radius: 4px;
background: #a31919;
border-color:#a31919;
font-family: "Source Sans Pro";
font-weight: normal;
font-size: 18px;
text-align: center;
background: #fe0303;
	
}

.approve{width: 152px;
height: 40px;
border-radius: 6px;
background: #fff;
border: 2px solid #fff;
font-family: "Source Sans Pro";
font-weight: normal;
font-size: 18px;
text-align: center;
color: #a31919;

}
.decline{width: 152px;
height: 40px;
border-radius: 6px;
border-color:#a31919;
background: #a31919;
font-family: "Source Sans Pro";
font-weight: normal;
font-size: 18px;
text-align: center;
color: #fff;

}

.container > div{width: 373.5px;
height: 130.17px;
background: transparent;
/* Note: currently only Safari supports backdrop-filter */
backdrop-filter: blur(50px);
--webkit-backdrop-filter: blur(50px);
background-color: rgba(255, 255, 255, 0.5);


}
.search{
width: 570px;
height: 45px;
border-radius: 4px;
background: #fff;
font-family: "Source Sans Pro";
font-weight: normal;
font-size: 13px;
line-height: 20px;
text-align: left;
color: #4d4f5c;
}
.text{
font-family: Arial;
font-weight: bold;
font-size: 15px;
text-align: left;
color: #fff;


}
.title{font-family: "Source Sans Pro";
font-weight: normal;
font-size: 28px;
line-height: 40px;
text-align: left;
color: #fff;
}
.buttonfeed{width: 117px;
height: 33px;
border-radius: 6px;
background: #fff;
border: 2px solid #fff;
font-family: Arial;
font-weight: bold;
font-size: 10px;
text-align: left;
color: #a31919;
text-align:center;
position:relative;
top:42px;
}
 .editicon{
	 vertical-align: middle;
    width: 16px;
    position: relative;
    left: 300px;
    top: 5px;
	 }
	 .removeicon{
	  vertical-align: middle;
    width: 16px;
    position: relative;
    left: 333px;
    bottom: 8px;
	 }
	 .buttona{width: 280px;
height: 81px;
border-radius: 6px;
background: #fff;
font-family: Helvetica;
font-weight: bold;
font-size: 16px;
line-height: 20px;
text-align: center;
	 color: #100e0e;
	 position: relative;
    left: 1200px;
    top: 172px;}
</style> 
<head>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js">
  </script>

  <script>
    $(document).ready(function(){
		$("#remove."<?php echo $id;?>".").click(function(){
			$("#emp-div."<?php echo $id;?>".").hide();
		});
	});
</script>
</head>

<body background="background.png">
<div>
<a href="login.php"><button class="logout" name="logout" style="
    position: relative;
    left: 1185;
">
log out
</button></a>
</div>

<div style="
    position: fixed;
    left: 200;
    top: 78px;
">
 <button class="viewbutton" name="viewemp">
View Employees
</button>

 <a href="feedbacks.html"><button class="button" name="feedback">
Feedback
</button></a>

 <a href="requests.html"><button class="button" name="requests" onclick="requests.html" >
Requests
</button></a>
</div>


<h3 class='title'>Employees:</h3>
<br/>

<input class="search" type="text" placeholder="Search" name="search" style="
    bottom: 92px;
    position: relative;
    left: 800;
">

 <!--<button type="submit"  name = "submit">
Submit
</button>s

-->


<?php
$localhost = "localhost";
$name = "root";
$password ="";
$dbname ="hr";
$conn = mysqli_connect($localhost,$name,$password,$dbname);
$sql="Select * from employee where deactivate='0'";
$result= mysqli_query($conn, $sql);
if($result){

if(mysqli_num_rows($result)>0){
	
while($res = mysqli_fetch_array($result))
{
	$id=$res['id'];
	
?>
<div class="container">


<div id="emp-divid.<?php echo$id;?>.">
<div>


<!--<div><a href="EditEmployee.php?id=$id\"><img class="editicon" src="https://img.icons8.com/ios/50/000000/edit.png"></a></div>

<div style="position: absolute;"><img id="remove" class="removeicon" src="https://img.icons8.com/ios/50/000000/cancel.png"></div> -->

<div>
<!--<div><img src=''style='width: 104px;height: 104px;border-radius: 52px;background:#fff;border: 1px solid #707070;'></img></div>-->
<label>Full Name: <?php echo $res['fullname']?></label><br>
  <label>Department: <?php echo $res['department']?></label><br>
  <label>Mobile:<?php echo $res['mobile']?></label><br>
 <?php echo"<a  href=\"EditEmployee.php?id=$id\" > Update </a> ";
  	echo"<a href=\"DeactivateEmp.php?id=$id\"> Deactivate </a> ";?>
  </div>
  </div>
 
</div>


</div>



</div>
 <?php
  
}}} ?>
<a href='addemployee.html'>
<button type='button' class='buttona'>Add Employee</button></a>
</body>
</html>