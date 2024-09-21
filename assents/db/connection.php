<?php
//Define os valores das variaveis
$host = 'localhost';  
$dbname = 'core';  
$username = 'root';  
$password = '';  

try {
    // Cria uma nova instância PDO para a conexão
    $pdo = new PDO("mysql:host=$host;dbname=$dbname;charset=utf8", $username, $password);

    // Definir o modo de erro do PDO para exceções
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    echo "Conexão bem-sucedida!";
} catch (PDOException $e) {
    // Exibe uma mensagem de erro caso a conexão falhe
    echo "Erro na conexão: " . $e->getMessage();
}
?>
