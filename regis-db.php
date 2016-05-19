<?php 
	if ($_SERVER["REQUEST_METHOD"] == "POST") {

	}
	$servername ="";
	$username = "";
	$password = "";
	$database = "";

	$conn = new mysqli($servername, $username, $password, $db);
		// Check connection
		if ($conn->connect_error) {
	    	die("Connection failed: " . $conn->connect_error);
		}

	$query = "";


	$conn->close();
?>

<html>
<head>
	<title>Registrasi Admin Database</title>
	<style type="text/css">
		input{
			margin: 20px;
		}
		body{
			text-align: center;			
		}
	</style>
</head>
<body>
<h1>Form Registrasi Administrator Web</h1>
<form name="form" action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']);?>" method="POST">
	<label>Username</label><input type="text" name="username"></input><br/>
	<label>Password</label><input type="password" name="password"></input> <br/>
	<input type="submit" value="Submit"></input>
</form>
</body>
</html>