<?php
  $conn = mysqli_connect('localhost', "root", "");

  if (!$conn) {
  die("Failed to connect to MySQL:" . mysqli_connect_error());
  }
  mysqli_select_db($conn,"iwp_project");
  mysqli_query($conn, "CREATE TABLE IF NOT EXISTS contact (
	uname varchar(30), 
	email varchar(100), 
	phone varchar(50),
    csubject varchar(200),
    cmessage varchar(2000)  
	);");	 
  if(isset($_POST['name']) && isset($_POST['email']) && isset($_POST['phone']) && isset($_POST['subject']) && isset($_POST['message'])){
    $result = mysqli_query($conn, "INSERT INTO contact(uname,email,phone,csubject,cmessage) VALUES ('$_POST[name]','$_POST[email]','$_POST[phone]','$_POST[subject]','$_POST[message]')");
    sleep(5);
    header("Location: logined.php");
  }
  ?>