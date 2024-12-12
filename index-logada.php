<?php
require "includes/funcoes-acesso.php";
verificarAcesso();
require "includes/funcoes.php";
$listaDeClientes = lerClientes($conexao);
include "includes/cabecalho.php";
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lista de Clientes</title>
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
    <style>
        body {
            background-color: #f8f9fa; /* Cor de fundo suave */
            color: #495057; /* Cor de texto suave */
        }
        .card {
            margin-bottom: 1rem;
        }
        .container {
            margin-top: 2rem;
        }
        .page-header {
            margin-bottom: 2rem;
        }
    </style>
</head>
<body>
    <div class="container">
        <div class="page-header text-center">
            <h1>Bem-vindo, <?=$_SESSION['nome']?></h1>
            <p>Lista de Clientes</p>
        </div>

        <?php
        foreach($listaDeClientes as $Clientes) {
        ?>
            <div class="card">
                <div class="card-body">
                    <h5 class="card-title"><?=$Clientes["nome"]?></h5>
                    <p class="card-text"><strong>Email:</strong> <?=$Clientes["email"]?></p>
                    <p class="card-text"><strong>Celular:</strong> <?=$Clientes["celular"]?></p>
                    <p class="card-text"><strong>Mensagem:</strong> <?=$Clientes["mensagem"]?></p>
                </div>
            </div>
        <?php
        }
        ?>
    </div>
    
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.2/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>
