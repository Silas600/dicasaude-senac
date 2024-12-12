<?php
$titulo = "Serviços - ";
include "includes/cabecalho.php";
include "includes/funcoes.php";

// Verificar se o formulário foi enviado
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nome = $_POST['nome'];
    $email = $_POST['email'];
    $celular = $_POST['celular'];
    $mensagem = $_POST['mensagem'];



    inserirUsuario($conexao, $nome, $email, $celular, $mensagem);
echo "<p> Cadastro feito com Sucesso </p>";
    // Preparar e vincular
    // $stmt = $conexao->prepare("INSERT INTO usuarios (nome, email, celular) VALUES (?, ?, ?)");
    // $stmt->bind_param("sss", $nome, $email, $celular);

    // Executar e verificar se a inserção foi bem-sucedida
    // if ($stmt->execute()) {
    //     echo "Cadastro realizado com sucesso!";
    // } else {
    //     echo "Erro ao cadastrar: " . $stmt->error;
    // }

    // Fechar a declaração
    // $stmt->close();
}

?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastro</title>
    <style>

    body{
        text-align: center;
       
        
    }

    .pai{
         display: flex;
         justify-content: center;
    }

    form{
        text-align: center;
        background-color: lightblue;
        width: 50vw;
        height: 600px;
        margin-bottom: 20px;
        border-radius: 20px;
        padding-top: 10px;
        
    }

    form .cadastrar{

    background-color: white;
    border: 1px solid black;

    }


    </style>
    
</head>
<body>
    <h2>Formulário de contato</h2>
    <div class="pai">
    <form action="" method="POST">
        <label for="nome">Nome:</label><br>
        <input type="text" id="nome" name="nome" required><br><br>

        <label for="email">Email:</label><br>
        <input type="email" id="email" name="email" required><br><br>

        <label for="celular">Celular:</label><br>
        <input type="text" id="celular" name="celular" required><br><br>

        <label for="mensagem">Como podemos te ajudar ?</label><br>
        <textarea cols="30" rows="7" name="mensagem" id="mensagem"></textarea><br><br><br><br>


        <input class="cadastrar" type="submit" value="Cadastrar">
        <br><br>
        <br><br>
        <br><br>
    </form>
    </div>
    <?php include "includes/rodape.php"; ?>

</body>

</html>