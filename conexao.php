<?php

// Configurações de conexão com o banco de dados
$hostname = 'localhost';   // Endereço do servidor do banco de dados
$username = 'root';  // Seu nome de usuário do MySQL
$password = '';    // Sua senha do MySQL
$database = 'sistemapontos'; // Nome do banco de dados

// Criar uma conexão com o banco de dados
$conn = new mysqli($hostname, $username, $password, $database);

// Verificar a conexão
if ($conn->connect_error) {
    die('Erro de conexão com o banco de dados: ' . $conn->connect_error);
}

echo 'Conexão bem-sucedida com o banco de dados!<br>';

// Aqui você pode começar a executar consultas no banco de dados

// Exemplo: Consulta básica
$query = 'SELECT * FROM funcionario';
$result = $conn->query($query);

if ($result) {
    // Exibir os resultados
    while ($row = $result->fetch_assoc()) {
        echo 'ID: ' . $row['id'] . ' - Nome: ' . $row['nome'] . '<br>';
    }
    
    // Liberar o resultado
    $result->free();
} else {
    echo 'Erro ao executar consulta: ' . $conn->error;
}

// Fechar a conexão
$conn->close();

?>
