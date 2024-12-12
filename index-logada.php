<?php
require "includes/funcoes-acesso.php";
verificarAcesso();
require "includes/funcoes.php";
$listaDeClientes = lerClientes($conexao);
include "includes/cabecalho.php";

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
    <style>

        body {
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            margin: 0;
            padding: 0;
            background-color: #e8f4f8;
            color: #333;
        }

        header {
            background-color: #0078a0;
            color: white;
            padding: 15px 0;
            text-align: center;
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
        }

        header h1 {
            margin: 0;
            font-size: 1.8rem;
        }

        main {
            max-width: 900px;
            margin: 20px auto;
            padding: 20px;
            background-color: #ffffff;
            border-radius: 8px;
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
        }

        h2 {
            color: #0078a0;
            font-size: 1.6rem;
            margin-bottom: 15px;
            border-bottom: 2px solid #0078a0;
            padding-bottom: 5px;
        }

        ul {
            list-style-type: none;
            padding: 0;
            margin: 0 0 20px 0;
        }

        ul li {
            padding: 10px;
            border: 1px solid #ccc;
            margin-bottom: 5px;
            border-radius: 4px;
            background-color: #f9f9f9;
        }

        ul li strong {
            color: #0078a0;
        }

        ul li:nth-child(odd) {
            background-color: #eef7fa;
        }

        footer {
            text-align: center;
            margin: 20px 0;
            font-size: 0.9rem;
            color: #666;
        }

    </style>
</head>
<body>
    <h1>Tá logado... <?=$_SESSION['nome']?></h1>

 
    </style>
</head>
<body>
    <h2>Lista de Clientes</h2>
<?php
foreach($listaDeClientes as $Clientes){
?>
    <ul>
        <li><?=$Clientes["nome"]?></li>
        <li><?=$Clientes["email"]?></li>
        <li><?=$Clientes["celular"]?></li>
        <li><?=$Clientes["mensagem"]?></li>
       
    </ul>
<?php
};
?>
    
</body>
</html>
</body>
</html>