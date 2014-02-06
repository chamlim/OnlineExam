<html>
<head>
	<title>index</title>
	<link rel="stylesheet" type ="text/css" href="css/style.css">
</head> 
<body>
	<div id="header"><br><font face=" Calibri" size="20" color="White">&nbsp&nbsp&nbspChams</font></div>
	<form method="POST" id ="logForm" action="logval.php">
		<div id="header1">
			<input type="text" id="userlog" placeholder="Username" name = "user">
			<input type="password" id="passlog" placeholder="Password" name = "pass">
			<button id="loginbtn">Login</button>
		</div>
	</form>


	<div id="header2"></div>
		<div id="frame">
		<form method="POST" id ="regForm"action="reg.php">
				<center><font face="Calibri" color="white"><h1>Register</h1></font>
					<input type="text" id="name" name="name" placeholder="Name">
					<input type="email" id="email" name="email" placeholder="Email">
					<input type="text" id="username" name="username" placeholder="Username">
					<input type="password" id="pass" name="password" placeholder="Password">
  					<button id="Register">Register</button>
  				</center>
  		</form>
  			<div id = "ack"> </div>
  			<div id = "warning">wawa </div>
  		</div>
  	<script type="text/javascript" src = "js/jquery.1.10.2.js"></script>
  		<script type="text/javascript" src = "js/reg.js"></script>
		<script type="text/javascript" src ="js/log.js"></script>
</body>
</html> 