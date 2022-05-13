<?php
session_start();
http_response_code(200);

$email = $_POST['mail'];
$password = $_POST['psw'];

try{
    require_once('db_info.php');
    $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
}catch(Exception $e){
    $error = $e->getMessage();
}
$query="SELECT * FROM user where email=:email";
$result = $db->prepare($query);
$result->execute(array(':email'=>$email));

$r = $result->fetch(PDO::FETCH_ASSOC);
if(is_array($r)){
    if ($r['password']==$password){
        $_SESSION['user']=$r;
        echo "Success";
    }else{
        echo "Failed";
    }
}else{
        echo "Failed";
    }

