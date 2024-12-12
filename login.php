<?php
include "includes/funcoes.php";
include "includes/funcoes-acesso.php";
include "includes/cabecalho.php";

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    /* Pegamos o e-mail e a senha digitados */
    $email = $_POST['email'];
    $senha = $_POST['senha'];

    /* Pegamos o e-mail e pesquisamos no banco se há alguém com aquele e-mail */
    $usuario = buscarAdmin($conexao, $email);

    /* Se tiver e a senha estiver certa... */
    if($usuario !== null && password_verify($senha, $usuario['senha'])){
        /* Logamos na sessão passando o id e o nome */
        login($usuario['id'], $usuario['nome']);

        // Redirecionar para admin/index.php
        header("location:index-logada.php");
    } else {
        echo "<h1 class='alert alert-danger text-center'>Dados incorretos!</h1>";
        die();
    }
}
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
    <style>
        body {
            background-color: #e9ecef; /* Cor de fundo suave */
            color: #495057; /* Cor de texto suave */
            height: 100vh;
            font-family: 'Arial', sans-serif;
        }
        .login-container {
            max-width: 450px;
            width: 100%;
            margin: 0 auto;
            background-color: white;
            padding: 3rem;
            border-radius: 8px;
            box-shadow: 0 2px 15px rgba(0, 0, 0, 0.1);
            margin-top: 10vh;
        }
        .form-control {
            border-radius: 0.375rem;
        }
        .btn {
            background-color: #007bff;
            color: white;
            border-radius: 0.375rem;
        }
        .btn:hover {
            background-color: #0056b3;
        }
        .alert {
            margin-top: 1rem;
        }
        .text-center h2 {
            font-size: 1.8rem;
            margin-bottom: 2rem;
            color: #343a40;
        }
        @media (max-width: 576px) {
            .login-container {
                margin-top: 5rem;
                padding: 1.5rem;
            }
        }
    </style>
</head>
<body>
    <div class="container d-flex justify-content-center align-items-center" style="height: 100vh;">
        <div class="login-container">
            <h2 class="text-center mb-4">Acesso Restrito</h2>

            <!-- Formulário de login -->
            <form method="POST" action="">
                <div class="form-group">
                    <label for="email">E-mail:</label>
                    <input type="email" name="email" id="email" class="form-control" required>
                </div>

                <div class="form-group">
                    <label for="senha">Senha:</label>
                    <input type="password" name="senha" id="senha" class="form-control" required>
                </div>

                <button type="submit" class="btn btn-primary btn-block">Entrar</button>
            </form>
        </div>
    </div>

    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.2/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>
