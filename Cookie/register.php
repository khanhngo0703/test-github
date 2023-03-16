<?php
function register() {
    if(!empty($_POST)) {
        $fullname = $_POST['fullname'];
        $username = $_POST['username'];
        $password = $_POST['password'];
        $email = $_POST['email'];
        $phone_number = $_POST['phone_number'];

        setcookie("fullname", $fullname, time() + 24*60*60, "/");
        setcookie("username", $username, time() + 24*60*60, "/");
        setcookie("password", $password, time() + 24*60*60, "/");
        setcookie("email", $email, time() + 24*60*60, "/");
        setcookie("phone_number", $phone_number, time() + 24*60*60, "/");

        header('Location: login.php');

    }
}