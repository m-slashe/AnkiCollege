<?php

class LoginCtrl {
    
    function __construct(){
        if(isset($_SESSION['login']) && isset($_SESSION['senha'])){
            header('Location: \App\Child\Profile\main');
        }
    }
    
    function form() {
        require_once 'login.html';
    }

    function entrar() {
        include_once ABSPATH . 'src' . DS . 'classes' . DS . 'Util.php';
            if ($_SERVER['REQUEST_METHOD'] === 'POST') {
                $login = $_POST['username'];
                $senha = $_POST['senha'];
    
                $userDao = new UserDAO();
                $user = $userDao->getUser($login, $senha);
    
                if ($user) {
                    $_SESSION['login'] = $login;
                    $_SESSION['senha'] = md5($senha);
                    $_SESSION['id'] = $user->getId();
                    unset ($_SESSION['error']);
                } else {
                    unset ($_SESSION['login']);
                    unset ($_SESSION['senha']);
                    unset ($_SESSION['id']);
                    $_SESSION['error'] += 1;
                }
                header('Location: \App\Child\Profile\main');
            } else {
                include_once 'login.html';
                if (array_key_exists('error', $_SESSION)) {
                    echo $_SESSION['error'];
                };
            }
    }

}