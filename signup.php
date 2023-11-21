<html>
	<head>
	<script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/2.1.2/sweetalert.min.js"></script>
    </head>	
<?php

$showAlert = false;
$showError = false;
$exists=false;
$conn = mysqli_connect('localhost', "root", "");

if (!$conn) {
die("Failed to connect to MySQL:" . mysqli_connect_error());
}
mysqli_select_db($conn,"iwp_project");	
mysqli_query($conn, "CREATE TABLE IF NOT EXISTS users (
	uname varchar(30), 
	email varchar(30), 
	phone varchar(13), 
	pass varchar(15), 
	primary key (email)
	);");
if($_SERVER["REQUEST_METHOD"] == "POST") {

		
	$result = mysqli_query($conn, "INSERT INTO users(uname,email,phone,pass) VALUES ('$_POST[name]','$_POST[email]','$_POST[phone]','$_POST[password]')");
	sleep(5);
	echo '<script  type="text/javascript">window.location.href="http://localhost/project/index.php";</script>';
}
	
?>
</html>
	

