<?php
    session_start();
    if(empty($_SESSION['username'])){
    header("location:login.php");  
}
?>

<!DOCTYPE html>
<html>
	<head>
		<title>Page After Login</title>
	</head>
	<body>
		<h1><a href="logout.php">Logout</a></h1>
		Welcome
		<?php
		echo $_SESSION['username'];
		?>
		
	</body>
</html>