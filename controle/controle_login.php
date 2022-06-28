<?php

if(isset($_POST['bt_login'])){
    require '../modelo/conexao.php';
    require '../modelo/loginDAO.php';

    $email = addslashes($_POST['email']);
    $senha = addslashes($_POST['senha']);

    $loginDAO = new LoginDAO();
    if($loginDAO->logar($email, $senha) == true){
        echo "<script>window.location = '../visao/home.php';
        </script>";
    } else {
        echo "<script>alert('Email e/ou senha incorreto(s)');
        window.location = '../visao/index.php';
        </script>";
    }
    
} else {
    header("Location:../visao/index.html");
}

