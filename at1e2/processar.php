<?php
// Verifica se o formulário foi enviado via POST ou se os dados foram passados via GET
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Recebe os dados do formulário via POST
    $nome = $_POST['nome'];
    $telefone = $_POST['telefone'];
    $email = $_POST['email'];
    $mensagem = $_POST['mensagem'];
} elseif ($_SERVER['REQUEST_METHOD'] === 'GET') {
    // Recebe os dados via URL GET
    $nome = $_GET['nome'];
    $telefone = $_GET['telefone'];
    $email = $_GET['email'];
    $mensagem = $_GET['mensagem'];
} else {
    die('Método não suportado.');
}

// Exibe os dados enviados
echo "<h1>Dados Enviados:</h1>";
echo "<p><strong>Nome:</strong> $nome</p>";
echo "<p><strong>Telefone:</strong> $telefone</p>";
echo "<p><strong>E-mail:</strong> $email</p>";
echo "<p><strong>Mensagem:</strong> $mensagem</p>";

// Exibe o cabeçalho da requisição HTTP
echo "<h2>Cabeçalhos da Requisição:</h2>";
echo "<pre>";
print_r(getallheaders());
echo "</pre>";

// Exibe o método HTTP utilizado
echo "<h2>Método HTTP Utilizado:</h2>";
echo "<p>" . $_SERVER['REQUEST_METHOD'] . "</p>";
?>
