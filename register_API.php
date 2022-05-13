<?php
session_start();
require_once 'db_info.php';
$conn = new mysqli($host, $user, $pass, $database);
if ($conn->connect_error)
    die('Fail Connection' . $conn->connect_error);
    if (! $conn->set_charset("utf8mb4")) {
        printf("Error loading character set utf8: %s\n", $mysqli->error);
        exit();
    }
    $email = $_REQUEST['email'] ?? "";
    $pass = $_REQUEST['pass'] ?? "";
    $username = $_REQUEST['username'] ?? "";
    $role = $_REQUEST['role'] ?? "";
    $query = "SELECT `email` FROM `user` WHERE email = '$email'";
    $result = $conn->query($query);
    if ($result->num_rows == 0) {
        $query = "INSERT INTO user( name, email, password, role_id) VALUES ('$username','$email','$pass', '$role');";
       
       if ( $result = $conn->query($query)) {
            $_SESSION['user'] = $username;
            $_SESSION['email']=$email;
            echo "Success";
        } else
            echo "Fail";    
    } else {
        echo "Registered";  
    }
    ?>
    
