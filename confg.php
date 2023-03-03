<?php

$servername = 'localhost';
$username = 'root';
$password = '';
$dbname = 'zaellyform';

$conexao = mysqli_connect($servername, $username, $password, $dbname);

// Verificar a conexão
if (!$conexao) {
    die("Falha na conexão: " . mysqli_connect_error());
  }
  // Receber os dados do formulário
$usuario = $_POST["usuario"];
$email = $_POST["email"];
$senha = $_POST["senha"];

// Inserir os dados no banco de dados
$sql = "INSERT INTO cadastro (usuario, email, senha) VALUES ('$usuario', '$email', '$senha')";

if (mysqli_query($conexao, $sql)) {
  header("Location: login.php");
} 
  else {
  echo "Erro ao criar registro: " . mysqli_error($conexao);
}

// Fechar a conexão com o banco de dados
mysqli_close($conexao);
?>