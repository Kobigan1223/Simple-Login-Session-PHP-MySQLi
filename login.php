<?php
    session_start();
    if(!empty($_SESSION['username'])){
    header("location:home.php");  
}
?>

<!DOCTYPE html>
<html>
	<head>
	    <title>Login</title>
	</head>
	<body>
	<h1><a href="index.php">Home</a></h1>
	 <form name="frmLogin" action="login_process.php" method="post" class="shadow form-horizontal form-signin well col-md-4 " id="formID" role="form">
	    <input    type="text" name="username" placeholder="Username" title="Username" required autofocus />
	    <input    type="password"  name="password" placeholder="Password" title="Password" required /> 
	    <button type="submit" name="login" title="Login"><b>SIGN IN</b></button> 
	</form> 
	</body>
</html>