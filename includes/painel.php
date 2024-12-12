<?php
session_start();
 
// Verificando se o usuário está logado
if (!isset($_SESSION['admin_id'])) {
    header('Location: login.php');
    exit();
}
 
echo "Bem-vindo, " . $_SESSION['admin_nome'] . "!";
 
?>