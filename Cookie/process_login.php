<?php
function login() {
    if(!empty($_POST)) {
        $cookieUsername = $_COOKIE['username'];
        $cookiePwd = $_COOKIE['password'];

        $username = $_POST['username'];
        $password = $_POST['password'];

        if($cookieUsername == $username && $cookiePwd == $password) {
            header('Location: welcome.php');
        }
    }
}