<?php
require "conecta.php";

function inserirUsuario($conexao, $nome, $email, $celular, $mensagem){
    $sql = "INSERT INTO clientes (nome, email, celular, mensagem)
    VALUES('$nome', '$email', '$celular', '$mensagem')";

// Executando o comando no banco via PHP
executarQuery($conexao, $sql);
}

    
function buscarAdmin($conexao, $email){
    $sql = "SELECT *FROM administradores WHERE email = '$email'";
    $resultado = executarQuery($conexao, $sql);
    return mysqli_fetch_assoc($resultado);
}


function executarQuery($conexao, $sql){
    $consulta = mysqli_query($conexao, $sql) or die(mysqli_errno($conexao));
    return $consulta;
}

function lerClientes($conexao){

$sql = "SELECT * FROM clientes";
$resultado = executarQuery($conexao, $sql);
    return mysqli_fetch_all($resultado, MYSQLI_ASSOC);

}