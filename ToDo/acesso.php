<?php

require_once 'app/init.php';

if(isset($_POST['name'])) {
    $name = addslashes($_POST['name']);
    $password = addslashes($_POST['password']);
    if(!empty($name) && !empty($password)){

        $acessQuery = $db -> prepare("
        SELECT id FROM users WHERE 
        username = :name AND password = :password 
        ");
        $acessQuery -> bindValue(":name", $name);
        $acessQuery -> bindValue(":password", $password);
        $acessQuery -> execute();
        if($acessQuery -> rowCount() > 0) {

            $dado = $acessQuery -> fetch();
            session_start();
            $_SESSION['id'] = $dado['id'];
            header("Location: index.php");

        }else{
            echo "Usuário ou Senha Inválidos!";
        }
    }else{
       echo "Preencha todos os campos!"; 
    }
}


