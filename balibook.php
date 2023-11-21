<?php
$conn = mysqli_connect('localhost', 'root', '', 'iwp_project');

if (!$conn) {
    die("Failed to connect to MySQL:" . mysqli_connect_error());
}

mysqli_query($conn, "CREATE TABLE IF NOT EXISTS bali (
    travellers int(10),
    tdate date,
    amount varchar(50)
);");

if (isset($_POST['count']) && isset($_POST['date'])) {
    $count = $_POST['count'];
    $date = $_POST['date'];
    $cost = $count * 57400;

    $result = mysqli_query($conn, "INSERT INTO bali (travellers, tdate, amount) VALUES ('$count', '$date', '$cost');");

    if ($result) {
        sleep(5);
        echo '<script  type="text/javascript">
        window.location.href="http://localhost/project/logined.php";</script>';
    } else {
        echo "Error: " . mysqli_error($conn);
    }
}
?>
