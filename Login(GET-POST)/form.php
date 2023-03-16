<?php
$hoten = $emailAddress = $ngaysinh = $matkhau = $xacminhmatkhau = $diachi = '';

$isPwdMapping = true;
// xu ly lay du lieu qua method = POST
if (!empty($_POST)) {
    if (isset($_POST['fullname'])) {
        $hoten = $_POST['fullname'];
    }
    if(isset($_POST['email'])) {
        $emailAddress = $_POST['email'];
    }
    if(isset($_POST['birthday'])) {
        $ngaysinh = $_POST['birthday'];
    }
    if(isset($_POST['password'])) {
        $matkhau = $_POST['password'];
    }
    if(isset($_POST['confirmation_password'])) {
        $xacminhmatkhau = $_POST['confirmation_password'];  
    }
    if(isset($_POST['address'])) {
        $diachi = $_POST['address'];
    }

    //echo $hoten . '-' . $emailAddress . '-' . $ngaysinh . '-' . $matkhau . '-' . $xacminhmatkhau . '-' . $diachi . '<br/>';

    if($matkhau == $xacminhmatkhau) {
        //nhay sang trang moi welcome.php
        // Chuc mung fullname dang ky tai khoan thanh cong
        header('Location: welcome.php?ten='.$hoten);
        die();
    }else {
        $isPwdMapping = false;
    }
    //mat khau khong mapping
}

// xu ly lay du lieu qua method = get
/** 
if(!empty($_GET)) {
    $hoten = $_GET['fullname'];
    $emailAddress = $_GET['email'];
    $ngaysinh = $_GET['birthday'];
    $matkhau = $_GET['password'];
    $xacminhmatkhau = $_GET['confirmation_password'];
    $diachi = $_GET['address'];

    echo $hoten.'-'.$emailAddress.'-'.$ngaysinh.'-'.$matkhau.'-'.$xacminhmatkhau.'-'.$diachi.'<br/>';
}*/

// xu ly du lieu qua bien moi truong $_REQUEST
/**
if(!empty($_REQUEST)) {
    $hoten = $_REQUEST['fullname'];
    $emailAddress = $_REQUEST['email'];
    $ngaysinh = $_REQUEST['birthday'];
    $matkhau = $_REQUEST['password'];
    $xacminhmatkhau = $_REQUEST['confirmation_password'];
    $diachi = $_REQUEST['address'];

    echo $hoten.'-'.$emailAddress.'-'.$ngaysinh.'-'.$matkhau.'-'.$xacminhmatkhau.'-'.$diachi.'<br/>';
}
 */
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.4/jquery.min.js" integrity="sha512-pumBsjNRGGqkPzKHndZMaAG+bir374sORyzM3uulLV14lN5LyykqNk8eEeUlUkB3U0M4FApyaHraT65ihJhDpQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/2.9.2/umd/popper.min.js" integrity="sha512-2rNj2KJ+D8s1ceNasTIex6z4HWyOnEYLVC3FigGOmyQCZc2eBXKgOxQmo3oKLHyfcj53uz4QMsRCWNbLd32Q1g==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
</head>

<body>
    <div class="container">
        <div class="panel panel-primary">
            <div class="panel-heading">
                <h2 class="text-center">Registation Form - Input User's Detail Information</h2>
            </div>

            <div class="panel-body">
                <form method="post" action="">
                    <div class="form-group">
                        <label for="usr">Name:</label>
                        <input type="text" class="form-control" id="usr" required="true" name="fullname" value="<?=$hoten?>">
                    </div>

                    <div class="form-group">
                        <label for="email">Email:</label>
                        <input type="email" class="form-control" id="email" required="true" name="email" value="<?=$emailAddress?>">
                    </div>

                    <div class="form-group">
                        <label for="birthday">Birthday:</label>
                        <input type="date" class="form-control" id="birthday" name="birthday" value="<?=$ngaysinh?>">
                    </div>

                    <div class="form-group">
                        <label for="pwd">Password: <?=$isPwdMapping?'':'<font color = red> Mat khau khong khop</font>'?></label>
                        <input type="password" class="form-control" id="pwd" required="true" name="password">
                    </div>

                    <div class="form-group">
                        <label for="confirmation_pwd">confirmation Password:</label>
                        <input type="password" class="form-control" id="confirmation_pwd" required="true" name="confirmation_password">
                    </div>

                    <div class="form-group">
                        <label for="address">Address:</label>
                        <input type="text" class="form-control" id="address" name="address" value="<?=$diachi?>">
                    </div>

                    <button class="btn btn-success">Register</button>
                </form>
            </div>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
</body>

</html>