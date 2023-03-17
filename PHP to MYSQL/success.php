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
    <h1 style="text-align: center">Welcome Tutorial</h1>
    <div class="container-fluid">
        <table class="table table-bordered table-hover">
            <tr>
                <th>No</th>
                <th>Full Name</th>
                <th>User Name</th>
                <th>Password</th>
                <th>Email</th>
                <th>Phone Number</th>
            </tr>
            <tbody>
                <?php
                require_once("sql_connect.php");

                $query = "SELECT * FROM STUDENT";
                $result = mysqli_query($connect, $query);
                $data = array();
                while ($row = mysqli_fetch_array($result, 1)) {
                    $data[] = $row;
                }

                require_once("sql_close.php");

                //hien thi thong tin sinh vien ra table
                for ($i = 0; $i < count($data); $i++) {
                    echo '<tr>
                    <td>'.($i+1).'</td>
                    <td>'.$data[$i]['FULL_NAME'].'</td>
                    <td>'.$data[$i]['USER_NAME'].'</td>
                    <td>'.$data[$i]['PASSWORD'].'</td>
                    <td>'.$data[$i]['EMAIL'].'</td>
                    <td>'.$data[$i]['PHONE_NUMBER'].'</td>
                </tr>';
                }

                ?>

            </tbody>
        </table>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
</body>

</html>