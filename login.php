<?php
include "includes/funcoes.php";
include "includes/funcoes-acesso.php";
 
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    /* pegamos email e senha digitado */
    $email = $_POST['email'];
    $senha = $_POST['senha'];

    /* pegamos o email e pesquisamos no banco se tem alguem com aquele email */
    $usuario = buscarAdmin($conexao, $email);
 
    /* se tiver e a senha tiver certa... */
    if($usuario !== null && password_verify($senha, $usuario['senha'])){
        /* logamos na sessão passando o id, o nome  */
		login($usuario['id'], $usuario['nome']);

		// Redirecionar para admin/index.php
		header("location:index-logada.php");
	}else{
		header("location:login.php?dados_incorretos");
		die();
	}
}
?>
 
<!-- Formulário de login -->
<form method="POST" action="">
    <label for="email">E-mail:</label>
    <input type="email" name="email" id="email" required>
    
    <label for="senha">Senha:</label>
    <input type="password" name="senha" id="senha" required>
    
    <button type="submit">Entrar</button>
</form>