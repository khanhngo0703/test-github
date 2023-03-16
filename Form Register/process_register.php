<?php
$f = $p = $u = '';
if(isset($_POST['fullname'])) {
    $f = $_POST['fullname'];
}

if(isset($_POST['username'])) {
    $u = $_POST['username'];
}
if(isset($_POST['password'])) {
    $p = $_POST['password'];
}

if($u != "" && $p != "") {
    header('Location: login.php?username='.$u.'&password='.$p);
    die();
}