<?php 
include("form2.php");

echo $_POST["mdp_check"];
echo $_POST["email_check"];
 
$email= $_POST['email_check'];
$mdp = $_POST['mdp_check'];
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
echo("connécté");
    
} else {
    echo "Identifiant invalid!";
	echo $user["passwords"];
echo var_dump($mdphash);
}

?>