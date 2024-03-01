<?php

$db_name = "cadastro";
$db_pass = "";
$db_user = "root";
$db_host = "localhost";

$DSN = "mysql:dbname=$db_name;mysql:host=$db_host";

try{
    $pdo = new PDO($DSN, $db_user, $db_pass);
}
catch (PDOException $e){
    echo "Erro com banco de dados: ".$e->getMessage();
}
catch(Exception $e){
    echo "Erro generico: ".$e->getMessage();
}

?>