<?php
include_once 'db/db.php';



$code = $_POST["code"];


$stmt = $connection->prepare("SELECT * FROM users WHERE code =:code");
$stmt->execute(['code' => $code]); 
$user = $stmt->fetch();


if ($user['code']== $code)
{
	header('location: membre1.php');
    
} else {
    echo "Code invalid!";
	echo $user["passwords"];
echo var_dump($code);
}

?>