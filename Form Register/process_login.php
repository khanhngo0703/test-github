<?php
//lay du lieu tu form dang ky gui sang
$regitered_username = $regitered_password = "";
if(isset($_GET['username'])) {
    $regitered_username = $_GET['username'];
}

if(isset($_GET['password'])) {
    $regitered_password = $_GET['password'];
}

//lay du lieu tu form dang nhap
$username = $password = "";
if(isset($_POST['username'])) {
    $username = $_POST['username'];
}

if(isset($_POST['password'])) {
    $password = $_POST['password'];
}

//kiem tra du lieu dang ky voi du lieu nhap vao form dang nhap
if($regitered_username == $username && $regitered_password == $password) {
    header('Location: welcome.php');
    die();
}else if($username != ""){
    echo '<h1 style="color: red; text-align: center">Login failed!!!</h1>';
}