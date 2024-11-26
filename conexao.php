<?php

$host = 'localhost';  // Endereço do servidor (geralmente localhost)
$usuario = 'root';    // Usuário do banco de dados
$senha = '';          // Senha do banco de dados
$banco = 'portal'; // Nome do banco de dados

// Criar a conexão
$conn = new mysqli($host, $usuario, $senha, $banco);

// Verificar se a conexão foi bem-sucedida
if ($conn->connect_error) {
    die("Conexão falhou: " . $conn->connect_error);
}
echo "Conexão bem-sucedida!";

?>