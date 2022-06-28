<?php

class loginDAO{


    function logar($email, $senha){
        global $pdo;
        
        $sql = $pdo->prepare("SELECT * FROM usuario WHERE email = :email AND senha = :senha");
        $sql->bindValue("email", $email);
        $sql->bindValue("senha", $senha);
        $sql->execute();

        if($sql->rowCount() != 0){
            $dado = $sql->fetch();
            
            $_SESSION['id'] = $dado['id'];

            return true;
        } else {
            return false;
        }

    }

}