<?php
$result = 0;
$a = $b = $cal = '';

if (!empty($_GET)) {
    $a = $_GET['a'];
    $b = $_GET['b'];
    $cal = $_GET['cal'];

    switch ($cal) {
        case '+':
            $result = $a + $b;
            break;
        case '-':
            $result = $a - $b;
            break;
        case '*':
            $result = $a * $b;
            break;
        case '/':
            $result = $a / $b;
            break;
        case '%':
            $result = $a % $b;
            break;
    }
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.4/jquery.min.js" integrity="sha512-pumBsjNRGGqkPzKHndZMaAG+bir374sORyzM3uulLV14lN5LyykqNk8eEeUlUkB3U0M4FApyaHraT65ihJhDpQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <link rel="stylesheet" href="style.css">
</head>

<body>
    <form method="get" name="myform">
        <input type="text" name="a" id="a" style="display: none" value="<?=$result?>" placeholder="Nhap a" required>
        <input type="text" name="b" id="b" style="display: none" value="" placeholder="Nhap b" required>
        <input type="text" name="cal" id="cal" style="display: none" value="" placeholder="Nhap phep tinh" required>
    </form>

    <div class="screen">
        <div class="pheptinh"><?=$a.$cal.$b?></div>
        <div class="result"><?=$result?></div>
    </div></br>
    <div class="small reset" onclick="resetData()">AC</div>
    <div class="small">+/-</div>
    <div class="small" value="%" onclick="setPhepTinh('%')">%</div>
    <div class="small dau" value="/" onclick="setPhepTinh('/')">/</div></br>
    <div class="small valuable" value="7" onclick="setValue(7)">7</div>
    <div class="small valuable" value="8" onclick="setValue(8)">8</div>
    <div class="small valuable" value="9" onclick="setValue(9)">9</div>

    <div class="small dau" value="*" onclick="setPhepTinh('*')">*</div></br>
    <div class="small valuable" value="4" onclick="setValue(4)">4</div>
    <div class="small valuable" value="5" onclick="setValue(5)">5</div>
    <div class="small valuable" value="6" onclick="setValue(6)">6</div>

    <div class="small dau" value="-" onclick="setPhepTinh('-')">-</div></br>
    <div class="small valuable" value="1" onclick="setValue(1)">1</div>
    <div class="small valuable" value="2" onclick="setValue(2)">2</div>
    <div class="small valuable" value="3" onclick="setValue(3)">3</div>

    <div class="small dau" value="+" onclick="setPhepTinh('+')">+</div></br>
    <div class="small0 valuable" value="0" onclick="setValue(0)">0</div>
    <div class="small valuable" value="." onclick="setValue('.')">.</div>

    <div class="small dau" value="=" onclick="submitForm()">=</div></br>

    <script type="text/javascript">
        // option = 1 -> dien a; option = 2 -> dien b
        var option = 1;

        function setValue(num) {
            if (option == 1) {
                $('#a').val($('#a').val() + num)
            } else {
                $('#b').val($('#b').val() + num)
            }
            buildCal()
        }

        function setPhepTinh(pheptinh) {
            if ($('#a').val() == "") {
                return;
            }
            $('#cal').val(pheptinh)
            option = 2
            buildCal()
        }

        function buildCal() {
            $('.pheptinh').html($('#a').val() + $('#cal').val() + $('#b').val())
        }

        function resetData() {
            option = 1
            $('#a').val('')
            $('#b').val('')
            $('#cal').val('')
            buildCal()
        }

        function submitForm() {
            $('[name=myform]').submit()
        }
    </script>
</body>

</html>