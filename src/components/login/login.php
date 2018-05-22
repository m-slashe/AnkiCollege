<?php
    include_once 'login.css';
    include_once ABSPATH.'src'.DS.'classes'.DS.'util.php';
    if ($_SERVER['REQUEST_METHOD'] === 'POST') {
        $login = $_POST['username'];
        $senha = $_POST['senha'];

        $user = getUser($login, $senha);

        if($user) {
            $_SESSION['login'] = $login;
            $_SESSION['senha'] = $senha;
            $_SESSION['id'] = $user['usuarioId'];
            unset ($_SESSION['error']);
        } else {
            unset ($_SESSION['login']);
            unset ($_SESSION['senha']);
            unset ($_SESSION['id']);
            $_SESSION['error'] += 1;
        }
        header('location:index.php');
     }else{
        include_once 'login.html';
        if(array_key_exists('error', $_SESSION)){
            echo $_SESSION['error'];
        };
    }