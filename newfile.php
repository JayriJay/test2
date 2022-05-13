<?php
require_once 'db_info.php';
$conn = new mysqli($host, $user, $pass, $database);
if($conn->connect_error)
    die("Fail connection" . $conn -> connect_error);
echo "Successfully connected";

$query = "SELECT * FROM user;";
$result = $conn->query($query);
if (! $result)
    die($conn->error);
$rows = $result -> num_rows;
echo "There were" .$rows . "results.<br>";
?>