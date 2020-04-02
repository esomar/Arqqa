<?php session_start() ?>
<html>
<style>

h2{
font-family: "Source Sans Pro";
font-weight: bold;
font-size: 35px;
letter-spacing: 0.2em;
line-height: 21px;
text-align: center;
color: #43425d;}
p{
font-family: "Source Sans Pro";
font-weight: normal;
font-size: 18px;
line-height: 13px;
text-align: center;
color: #4d4f5c;
opacity: 0.5;
}

.page{
display: grid;
  grid-template-columns: repeat(2, 1fr);
  grid-gap: 10px;
  grid-auto-rows: minmax(100px, auto);}

.title{

font-family: "Source Sans Pro";
font-weight: normal;
font-size: 15px;
line-height: 25px;
text-align: left;
color: #43425d;
}

.button{ width: 186px;
height: 50px;
border-radius: 4px;
background: #43425d;
border: 1px solid #43425d;
font-family: "Source Sans Pro";
font-weight: normal;
font-size: 18px;
text-align: center;
color: #fff;}}
</style>
    <body>
	<div class='page'>
	<div>
	   <img src="Component 212 – 1.png" width="750" height="740"><br><br>
        </div>
		<div style='    margin-top: 200px;
    margin-left: 16px;'>
		<div>
		 <div><img style='position: relative;
    left: 300;
'src="logo.png" width="138" height="171"> 
        <p>welcome back!please log to your account</p>
     </div>
	 <form method="post" action="Login-backend.php">
	 <div style="
    
    text-align-last: center;
">
        <label for="name">UserName:</label>
        <input type="text" name="name" id="name"><br><br>
        <label for="pass">Password:</label>
        <input type="password" name="pass" id="pass"><br><br>
		</div>
		<div style='text-align: center;'>
		<div><input type="checkbox" name="name">
        <label class='title'
for="name">Remember me</label>
        
		</div>
        <a class='title'href="Email-changePass.php">Forgot Password</a><br>
</div>
       <div style='text-align: center;'> <input class='button'type="submit" name="submit" value="Login">
</div>
</form>
		</div>
		</div>
    </body>
</html>


