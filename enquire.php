<html>
    <head>
    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/2.1.2/sweetalert.min.js"></script>
    </head>

<?php
  $conn = mysqli_connect('localhost', "root", "");
  
  if (!$conn) {
  die("Failed to connect to MySQL:" . mysqli_connect_error());
  }
  mysqli_select_db($conn,"iwp_project");
  mysqli_query($conn, "CREATE TABLE IF NOT EXISTS enquiries (
	destination varchar(30), 
	travellers int(100), 
	tdate date,
    phone varchar(13),  
	primary key (phone)
	);");	 
  if(isset($_POST['destination']) && isset($_POST['travellers']) && isset($_POST['date']) && isset($_POST['phone'])){
    $result = mysqli_query($conn, "INSERT INTO enquiries(destination,travellers,tdate,phone) VALUES ('$_POST[destination]','$_POST[travellers]','$_POST[date]','$_POST[phone]')");
    //header("Location: logined.php?serror=Enquiry sent successfully");
    sleep(5);
    echo '<script  type="text/javascript">swal("Enquiry sent successfully!","Our Representative will contact you shortly","success");
    window.location.href="http://localhost/project/logined.php";</script>';
  }
  ?>
  </html>