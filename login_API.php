<?php
session_start();
require_once 'db_info.php';
http_response_code(200);

$email = $_POST['mail'];
$password = $_POST['psw'];

$conn = new mysqli($host, $user, $pass, $database);
if($conn -> connect_error)
    die("Connection Error".$conn->connect_error);
    if (!$conn->set_charset("utf8mb4")){
        printf("Error loading character set utf8 %s\n", $mysqli->error);
        exit();
    }
$query = <<<SQL
SELECT * FROM user WHERE email='$email' AND password='$password';
SQL;

$result = $conn->query($query);
$rows = $result->num_rows;
if ($rows !=0){
    $r = $result->fetch_array(MYSQLI_ASSOC);
    $_SESSION['user'] = $r;
    echo "Success";
}   else 
        echo "Fail";
?>