<?php


$host = "localhost";
$user = "root";
$pass = "";
$dbname = "test";
$port = 3307;

try{
    $pdo = new PDO("mysql:host=$host;port=$port;dbname=" .  $dbname, $user, $pass);
    echo "Conexão com Banco de Dados Realizados Com Sucesso!";

}catch(PDOException $err){
    echo "Deu Merda!!!!!!!! " . $err->getMessage();
}

//root@localhost
?>