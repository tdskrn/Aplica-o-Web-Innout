<?php

function requireValidSession($requiresAdmin = false ){
    $user = $_SESSION['user'];
    if(!isset($user)){
        header('Location: login.php');
        exit();
    } else if($requiresAdmin && !$user->is_admin){
        addErrorMsg('Acesso negado');
        header('Location: day_records.php');
        exit();
    }
}