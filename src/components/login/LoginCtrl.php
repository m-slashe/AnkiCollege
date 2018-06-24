<?php

class LoginCtrl {

    function form() {
        if(isset($_SESSION['id']) && isset($_SESSION['login'])){
            header('Location: \App\Child\Profile\main');
        }else{
            require_once 'login.php';
        }
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
            include_once 'login.php';
            if (array_key_exists('error', $_SESSION)) {
                echo $_SESSION['error'];
            };
        }
    }

    function sair(){
        session_destroy();
        unset ($_SESSION['login']);
        unset ($_SESSION['senha']);
        unset ($_SESSION['id']);
        header('Location: \Login\Form');
    }

}