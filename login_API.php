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

$query = <<<SQL
SELECT * FROM user WHERE email=':email' AND password=':password';
SQL;

$result = $db->prepare($query);
$res = $result->execute(array(':email'  => $email,
                              ':password'  => $password,
                            ));
$r = $result->fetch(PDO::FETCH_ASSOC);
print_r($r);
     // if($res){
     //    echo "Success";
     // }else{
     //    echo "failed";
     // }