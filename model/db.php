<?php
// Conexão com o banco de dados
$host = 'localhost';
$user = "root";
$pass = "";
$db = "curso_ingles";

$conn = new mysqli($host, $user, $pass, $db);
if ($conn->connect_error){
    die("Erro na conexão: " . $conn->connect_error);
}