<?php
include "includes/conecta.php";

// Verificar se o formulário foi enviado
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nome = $_POST['nome'];
    $email = $_POST['email'];
    $celular = $_POST['celular'];

    // Preparar e vincular
    $stmt = $conexao->prepare("INSERT INTO usuarios (nome, email, celular) VALUES (?, ?, ?)");
    $stmt->bind_param("sss", $nome, $email, $celular);

    // Executar e verificar se a inserção foi bem-sucedida
    if ($stmt->execute()) {
        echo "Cadastro realizado com sucesso!";
    } else {
        echo "Erro ao cadastrar: " . $stmt->error;
    }

    // Fechar a declaração
    $stmt->close();
}

// Fechar a conexão
$conexao->close();
?>

