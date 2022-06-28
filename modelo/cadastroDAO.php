<?php

class cadastroDAO{
    function inserir($nome, $email, $senha){
        try{
            $pdo = new PDO("mysql:host=localhost;dbname=gameover", "root", "");
        $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

        $stmt = $pdo->prepare('INSERT INTO usuario(nome, email, senha) VALUES(:nome, :email, :senha)');
        $stmt->execute(array(':nome' => "$nome", ':email' => "$email", ':senha' => "$senha"));
        echo "<script>alert('Cadastrado com sucesso!');
        window.location = '../visao/index.php';
        </script>";
        } catch(PDOException $e){
            echo 'Error: ' . $e->getMessage();
        }
        
    }

    function excluir($id){

        try{
            $pdo = new PDO("mysql:host=localhost;dbname=gameover", "root", "");
            $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

            $delete = $pdo->prepare("DELETE FROM usuario WHERE id = '$id'");
            $delete->execute();

            session_start();
            unset($_SESSION['id']);

            echo "<script>alert('Usuário deletado com sucesso');
            window.location = '../visao/index.php'</script>"; 
            
        } catch(PDOException $e){
            echo 'Error: ' . $e->getMessage();
        }
    }

    function buscarConta($email){
        include_once("../visao/confirmaConta.php");
        include_once("../modelo/cadastro.php");

        $pdo = new PDO("mysql:host=localhost;dbname=gameover", "root","");
        $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

        $consulta = $pdo->query("SELECT * FROM usuario WHERE email = '$email'");
        $total_retornado = $consulta->rowCount();
        if($total_retornado === 0){
            echo "<script>alert('Email incorreto!');
            window.location = '../visao/confirmaConta.php';
            </script>";
        } else {
            while($linha = $consulta->fetch(PDO::FETCH_ASSOC)){
                $cadastro = new Cadastro($linha['id'], $linha['nome'], $linha['email'], $linha['senha']);
            echo "<!DOCTYPE html>";
            echo"<html lang='pt-br'>";
            echo"<head>";
            echo"<meta charset='UTF-8'>";
            echo"<script src='https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js'></script>";    
            echo"<script src='script.js'></script>";
            echo"<title>Alterar Conta</title>";
            echo"<link rel='stylesheet' type='text/css' href='../visao/css/estiloCastrado.css'>";
            echo"</head>";
            echo"<body id='container'>";
            echo"<div>";
            echo"<div id='cadastro'>";
            echo"<h1>".$cadastro->getNome()."</h1>";
            echo"<form method='post' action='../controle/controle_cadastro.php'>";
            
            echo"<input type='submit' id='bt' name='bt_editar' value='Editar Conta'><br>";
            echo"<input type='hidden' name='id' value='".$linha['id']."'/>";
            echo"<input type='submit' id='bt' name='bt_excluir' value='Excluir Conta'>";
            
            echo"</form>";
            echo"</div>";
            echo"</div>";
            echo"<script src='https://code.jquery.com/jquery-3.3.1.slim.min.js' integrity='sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo' crossorigin='anonymous'></script>";
            echo"<script src='https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js' integrity='sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49' crossorigin='anonymous'></script>";
            echo"<script src='https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js' integrity='sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy' crossorigin='anonymous'></script>";
            echo"<script src='script.js'></script>";
            echo"</body>";
            echo"</html>";
            }
        }
    }

    function Editar($id) {
        try{
            $pdo = new PDO("mysql:host=localhost;dbname=gameover", "root","");
            $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            $consulta = $pdo->query("SELECT id, nome, email FROM usuario WHERE id = $id");

            while($linha = $consulta->fetch(PDO::FETCH_ASSOC)){
                session_start();
                include_once("../modelo/cadastro.php");
                $cadastro = new Cadastro($linha['id'], $linha['nome'], $linha['email'], $linha['senha']);
                $_SESSION['id'] = serialize($cadastro);
                header("location:../visao/alterarConta.php");
            }
        } catch(PDOException $e){
            echo 'Error: ' . $e->getMessage();
        }
    }

    function SalvarEdicao($id, $nome, $email){
        try{
            $pdo = new PDO("mysql:host=localhost;dbname=gameover", "root","");
            $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

            $editar = $pdo->query("UPDATE usuario SET nome = '$nome', email = '$email' WHERE id = '$id'");
            $editar->execute();
            echo "<script>alert('Alterado com sucesso!');</script>";
        } catch(PDOException $e){
            echo 'Error: ' . $e->getMessage();
        }
    }

    function recuperarSenha($email){
        include_once("../visao/recuperacao.php");
        include_once("../modelo/cadastro.php");

        $pdo = new PDO("mysql:host=localhost;dbname=gameover", "root","");
        $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

        $consulta = $pdo->query("SELECT * FROM usuario WHERE email = '$email'");
        $total_retornado = $consulta->rowCount();
        if($total_retornado === 0){
            echo "<script>alert('Email incorreto!');
            window.location = '../visao/confirmaConta.php';
            </script>";
        } else {
            while($linha = $consulta->fetch(PDO::FETCH_ASSOC)){
                $cadastro = new Cadastro($linha['id'], $linha['nome'], $linha['email'], $linha['senha']);
                echo "<!DOCTYPE html>";
            echo"<html lang='pt-br'>";
            echo"<head>";
            echo"<meta charset='UTF-8'>";
            echo"<script src='https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js'></script>";    
            echo"<script src='script.js'></script>";
            echo"<title>Alterar Conta</title>";
            echo"<link rel='stylesheet' type='text/css' href='../visao/css/estiloCastrado.css'>";
            echo"</head>";
            echo"<body id='container'>";
            echo"<div>";
            echo"<div id='cadastro'>";
            echo"<h1>".$cadastro->getSenha()."</h1>";
            echo"</form>";
            echo"</div>";
            echo"</div>";
            echo"<script src='https://code.jquery.com/jquery-3.3.1.slim.min.js' integrity='sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo' crossorigin='anonymous'></script>";
            echo"<script src='https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js' integrity='sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49' crossorigin='anonymous'></script>";
            echo"<script src='https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js' integrity='sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy' crossorigin='anonymous'></script>";
            echo"<script src='script.js'></script>";
            echo"</body>";
            echo"</html>";
            }
    }


    }
}
