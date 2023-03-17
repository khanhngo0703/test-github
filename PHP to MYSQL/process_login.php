<?php
function login() {
    if(!empty($_POST)) {
        $username = $_POST['username'];
        $password = $_POST['password'];

        require_once("sql_connect.php");

        $query = "SELECT * FROM STUDENT WHERE USER_NAME = '".$username."' AND PASSWORD = '".$password."'";
        $result = mysqli_query($connect, $query);
        $data = array();
        while($row = mysqli_fetch_array($result, 1)) {
            $data[] = $row;
        }

        require_once("sql_close.php");

        if($data != null && count($data) > 0) {
            header("Location: success.php");
        }
    }
}