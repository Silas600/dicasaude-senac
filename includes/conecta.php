<?php

$servidor = "localhost";
$usuario = "root";
$senha = "";
$banco = "dicassaudefinal";

$conexao = mysqli_connect($servidor, $usuario, $senha, $banco);

mysqli_set_charset($conexao, "UTF8");

/*
if($conexao === false){
die("Erro:" .mysqli_connect_error());
} else {
    echo "beleza calabreza"
;} */


// Verificar conexão
if ($conexao->connect_error) {
    die("Conexão falhou: " . $conn->connect_error);
}

// Consultar os dados dos clientes
$sql = "SELECT id, nome, email, celular, mensagem, criado_em FROM clientes ORDER BY criado_em DESC";
$result = $conexao->query($sql);
?>
