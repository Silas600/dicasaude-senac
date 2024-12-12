<?php

/* Verificando se não existe uma sessão em andamento */
if( !isset($_SESSION)){
        // SE não tiver, então iniciamos uma sessão
        session_start();
}

/* Proteger o acesso ás páginas da áre administrativa */
function verificarAcesso(){

    /* Se NÃO EXISTIR uma variável de sessão chamada "id", então significa que o usuário não está logado. */
    if( !isset($_SESSION['id'])){

        /*  Portanto, destruímos qualquer resquício de sessão*/
        session_destroy();

        /* Fazemos o usuário ir para  */
        header("location:login.php?acesso_negado");
        die();
    }
}

/* Função que será usada pelo formulário login.php */
function login($id, $nome){
    $_SESSION['id'] = $id;
    $_SESSION['nome'] = $nome;
}

function logout(){
    session_destroy();
    header("location:login.php?saiu");
    die();
}

