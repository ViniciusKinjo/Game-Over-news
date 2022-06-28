<?php

include_once('../modelo/cadastro.php');
include_once('../modelo/cadastroDAO.php');

$cadastroDAO = new CadastroDAO();

if(isset($_POST['bt_cadastro'])){
    $cadastroDAO->inserir($_POST['nome'], $_POST['email'], $_POST['senha']);
}

if(isset($_POST['bt_excluir'])){
    $cadastroDAO->excluir($_POST['id']);
}

if(isset($_POST['bt_editar'])){
    $cadastroDAO->editar($_POST['id']);
}

if(isset($_POST['bt_salvar'])){
    $cadastroDAO->SalvarEdicao($_POST['id'], $_POST['nome'], $_POST['email']);
    $cadastroDAO->buscarConta($_POST['email']);
}

if(isset($_POST['bt_confirma'])){
    $cadastroDAO->buscarConta($_POST['email']);
}

if(isset($_POST['bt_recuperar'])){
    $cadastroDAO->recuperarSenha($_POST['email']);
}

