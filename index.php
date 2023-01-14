<?php
include("connexion.php");
try {
    $bd = new PDO ( "mysql:host = $server; dbname=$base", "$user", "$password"); 
    $bd->exec("SET NAMES utf8");
    echo("Connexion à la base de donnée réussie");
}
catch (Exception $e){
    print_r($e -> getMessage());
    die("Erreur de connexion à la base ");
}
?>
