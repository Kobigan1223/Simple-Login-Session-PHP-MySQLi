<?php
    session_start();
    if(!empty($_SESSION['username'])){
    header("location:home.php");  
}
?>

<!DOCTYPE html>
<html>
	<head>
		<title>Front Page</title>
	</head>
	<body>
		<h1><a href="login.php">Login</a></h1>
	</body>
</html>