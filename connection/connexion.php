<?php

$dsn = 'mysql:dbname=stagepalaco;port=3306;host=127.0.0.1';
$user = 'root'; 
$password = '';

$token = md5('kM7qD'.mt_rand(0,9999).time());


try {
   
    $connection = new PDO($dsn, $user, $password, [
        
        PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,

        PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC,
      
    ]);
 
$email = $_GET['e'];

 
if(isset($_POST['e'])){
    $email = $_POST['e'];
    echo 'Salut ' . $email . '' ;
}
else{
    echo 'email envoyé';
}

$sql = "INSERT INTO users (email, token) VALUES (:e,:token)"; 




$pdoStatement = $connection->prepare($sql);
$pdoStatement->bindValue(':e',$email);
$pdoStatement->bindValue(':token',$token);


$pdoStatement->execute();

} catch (PDOException $e) {
   exit('Connexion échouée : ' . $e->getMessage());
}