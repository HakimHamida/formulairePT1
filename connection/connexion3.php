<?php
include_once 'db/db.php';

$email= $_POST['e'];
$mdp = $_POST['mdp'];
$mdphash = $_POST["mdp"];
$mdp = $mdphash;

$mdphash = hash(
    "sha256",
    $mdp,
);

$stmt = $connection->prepare("SELECT * FROM users WHERE email=:email");
$stmt->execute(['email' => $email]); 
$user = $stmt->fetch();


if ($user['passwords']== $mdphash)
{
    $comb = "abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ0123456789";
$shfl = str_shuffle($comb);
$code = substr($shfl,0,8);




$sql = "UPDATE users SET code = ? WHERE email = ?"; 

$connection->prepare($sql)->execute([$code, $email]);
	header('location: membre.php');
    
} else {
    echo "Identifiant invalid!";
	echo $user["passwords"];
echo var_dump($mdphash);
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h3>pas du tout Connected</h3>
</body>
</html>