<head>
  <script src="jquery-3.3.1.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/2.1.2/sweetalert.min.js"></script>
</head>
<?php
  $conn = mysqli_connect('localhost', "root", "");
  session_start();
  if (!$conn) {
  die("Failed to connect to MySQL:" . mysqli_connect_error());
  }
  mysqli_select_db($conn,"iwp_project");	 
if (isset($_POST['email']) && isset($_POST['password']) && isset($_POST['captcha'])) {

    function validate($data){
       $data = trim($data);
       $data = stripslashes($data);
       $data = htmlspecialchars($data);
       return $data;

    }

    $email = validate($_POST['email']);

    $pass = validate($_POST['password']);

    if (empty($email)) {

        echo "<script>
                alert('Enter Email');
                window.location.href='http://localhost/project/index.php';
                </script>";
        exit();

    }else if(empty($pass)){
        echo "<script>
                alert('Password is Required');
                window.location.href='http://localhost/project/index.php';
                </script>";

        exit();

    }else{
        $result = mysqli_query($conn,"SELECT * FROM Users WHERE email='$_POST[email]' AND pass='$_POST[password]'");
        if (mysqli_num_rows($result) == 1) {
            $row = mysqli_fetch_array($result);
            if ($row[1] == $email && $row[3] == $pass && $_SESSION['captcha']==$_POST['captcha']) {

                echo "Logged in!";

                header("Location: logined.php");

                exit();

            }
            else{

                echo "<script>
                alert('Incorrect username or password!');
                window.location.href='http://localhost/project/index.php';
                </script>";
                exit();

            }

        }else{
            echo "<script>
            alert('Inavlid Credentials');
            window.location.href='http://localhost/project/index.php';
            </script>"; 
            exit();

        }

    }

}else{

   

    exit();

}
?>
  