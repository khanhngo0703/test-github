<?php
require_once("define.php");

//tao ket noi toi database
$connect = new mysqli(HOST, USERNAME, PASSWORD, DATABASE);

// cho phep PHP luu unicode(utf8) -> database 
mysqli_set_charset($connect, "utf8");

//kiem tra ket noi co thanh cong hay khong
if ($connect->connect_error) {
    var_dump($connect->connect_error);
    die();
}
