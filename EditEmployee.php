 <html>
  <style>
 input {
 width: 799px;
height: 50px;
background: #fff;
border: 1px solid #fe0303;
font-family: Arial;
font-weight: normal;
font-size: 14px;
text-align: left;
color: #fe0303;

}

select{  width: 799px;
height: 50px;
background: #fff;
border: 1px solid #fe0303;
font-family: Arial;
font-weight: normal;
font-size: 14px;
text-align: left;
color: #fe0303;
}
 
  button{
 width: 280px;
height: 81px;
border-radius: 6px;
background: #fff;
font-family: Helvetica;
font-weight: bold;
font-size: 16px;
line-height: 20px;
text-align: center;
color: #100e0e;
}
label{
padding: 20px;
width: 100px;
height: 50px;
background: #a31919;
font-family: Arial;
font-weight: bold;
font-size: 10px;
text-align: left;
color: #fff;
width: 100px;
height: 50px;
background: #a31919;
}
.myheader{
font-family: "Source Sans Pro";
font-weight: normal;
font-size: 28px;
line-height: 40px;
text-align: left;
color: #fff;
}
form > div{
padding-bottom: 10px;} 

.upload{
width: 100px;
height: 50px;
background: #a31919;
    position: relative;
    bottom: 45px;
    border-color: #a31919;

} 
</style>
 <body  background="background.png">
 <div>
 <h3 class='myheader'>Edit Employee:</h3>
 
 </div>

 <?php
 include("classes.php");
 $database = new Database();

$id= $_GET['id'];


$sql="select * from employee where id = '".$id."'";
if($result=mysqli_query($database->conn,$sql)){
if(mysqli_num_rows($result)>0){

while($res= mysqli_fetch_array($result)){

	$id=$res['id'];
	$fullname=$res['fullname'];
	$address=$res['address'];
	$mobile=$res['mobile'];
	$telephone=$res['telephone'];
	$department=$res['department'];
	$username=$res['username'];
	$password=$res['password'];
	$email=$res['email'];


}}

}

 ?>
 
 <div>
 <form name="Addemployee" method = "POST" action ="backend-editemp.php" >
        <div>
	 <img src=''style='width: 104px;height: 104px;border-radius: 52px;background: #fff;border: 1px solid #707070;'></img>
	 <button class='upload'>Upload</button>
	 </div>
	 <input type="hidden" name="id" value= "<?php echo $id;?>" >
 
<div>	   <label>Fullname Name:</label>
          <input type="text" name="fullname" value="<?php echo $fullname;?>" required="required"/></div>
<div>         <label>Address:</label>
            <input type="text"  name="address" required="required" value="<?php echo $address; ?>"></div>
	<div>	<label>Phone Number:</label>
          <input type="number"  name ="mobile" required="required" value="<?php echo $mobile; ?>"></div>
		 <div><label>Telephone:</label>
          <input type="number"  name ="telephone" required="required" value="<?php echo $telephone; ?>">
		  </div>
         <div><label> Email:</label>
          <input type="text"  name ="email" required="required" value="<?php echo $email; ?>"></div>
		<div><label>Department:</label>
         <input type="text" name="department" value="<?php echo $department;?>" required="required"/>
          
         
		  </div>
		 <div><label> <label for="position">Position:</label></label>

<select class='input'id="position">
  <option value="hr-mng">Hr Manager</option>
  <option value="hr-team">HR Employee</option>
  <option value="prj-mng">Project Manager</option>
  <option value="prj-eam">Employee</option>
</select>
		 </div>
		 <div><label>Salary:</label>
          <input type="number" placeholder="Salary" name ="Username" required="required"></div>
          <div><label>Username:</label>
          <input type="text"  name="username" value="<?php echo $username;?>" required="required"/></div>
          <div><label>Password:</label>
         <input type="text"  name="password" value="<?php echo $password;?>" required="required"/>
          </br>
		</div>  
		  <div>
 <button name = "back">
Back
</button>
<button type="submit"  name = "submit">
Confirm
</button>
        
        <br>  <br>
		</div>
        </form>
	</div>
</body>
</html>	