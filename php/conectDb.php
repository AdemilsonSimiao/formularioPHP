<?php
$host = "localhost";
$user = "root";
$password = "";
$dbname = "mybd";
$port = 3306;

try {
    $conn = new PDO("mysql:host=$host;dbname=" . $dbname, $user, $password);
    //echo("conexão realizada com sucesso!");    //code...
} catch (\Throwable $th) {
    echo("Erro 01: Sua conexão não foi realizada, verifica com o suporte");//throw $th;
}
