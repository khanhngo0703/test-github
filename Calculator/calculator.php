<?php
$a = $b = $cal = $result = '';
if (!empty($_GET)) {
    if (isset($_GET['a'])) {
        $a = $_GET['a'];
    }
    if (isset($_GET['b'])) {
        $b = $_GET['b'];
    }
    if (isset($_GET['cal'])) {
        $cal = $_GET['cal'];
    }

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
    <link rel="stylesheet" href="main.css">
</head>

<body>
    <form method="get" action="" id="MyForm" style="display: none;">
        <input required="true" type="number" name="a" placeholder="Enter A" value="<?=$a?>">
        <input required="true" type="number" name="b" placeholder="Enter B" value="<?=$b?>">
        <select name="cal" required="true">
            <option value="">Chon phep tinh</option>
            <option value="+" <?=($cal == '+')?'selected':''?>>+</option>
            <option value="-" <?=($cal == '-')?'selected':''?>>-</option>
            <option value="*" <?=($cal == '*')?'selected':''?>>*</option>
            <option value="/" <?=($cal == '/')?'selected':''?>>/</option>
            <option value="%" <?=($cal == '%')?'selected':''?>>%</option>
        </select>
        <!-- <input type="text" name="cal" placeholder="Enter Cal"> -->
        <button type="submit">Submit</button>
        <p style="font-size: 20px; color: red">
            Ket qua: <?=$result?>
        </p>
    </form>

    <table>
        <tr>
            <td colspan="7"><input id="result" type="text" value="<?=($a.$cal.$b.'='.$result)?>" disabled></td>
        </tr>

        <tr>
            <td><input type="button" class="btn" value="7"></td>
            <td><input type="button" class="btn" value="8"></td>
            <td><input type="button" class="btn" value="9"></td>
            <td><input type="button" class="btn" value="/"></td>
            <td><input type="button" class="btn" value="C"></td>
        </tr>

        <tr>
            <td><input type="button" class="btn" value="4"></td>
            <td><input type="button" class="btn" value="5"></td>
            <td><input type="button" class="btn" value="6"></td>
            <td><input type="button" class="btn" value="*"></td>
            <td><input type="button" class="btn" value="AC"></td>
        </tr>

        <tr>
            <td><input type="button" class="btn" value="1"></td>
            <td><input type="button" class="btn" value="2"></td>
            <td><input type="button" class="btn" value="3"></td>
            <td><input type="button" class="btn" value="-"></td>
            <td rowspan="2"><input id="equ" type="button" class="btn" value="="></td>
        </tr>

        <tr>
            <td colspan="2"><input type="button" id="zero" class="btn" value="0"></td>
            <td><input type="button" class="btn" value=","></td>
            <td><input type="button" class="btn" value="+"></td>
        </tr>
    </table>

    <script type="text/javascript">
        $(function() {
            $('input').click(function() {
                var v = $(this).val();
                switch(v) {
                    case '+':
                    case '-':
                    case '*': 
                    case '/':
                    case '%':
                        $('[name=cal]').val(v)
                        break;
                    case '=':
                        $('#MyForm').submit()
                        break;
                    case 'AC':
                    case 'C':
                        $('[name=a]').val('')
                        $('[name=b]').val('')
                        $('[name=cal]').val('')
                    default:
                        if($('[name=cal]').val() != '') {
                            //nhap B
                            $('[name=b]').val($('[name=b]').val() + v)
                        }else {
                            //nhap A
                            $('[name=a]').val($('[name=a]').val() + v)
                        }
                        break;
                }

                $('#result').val($('[name=a]').val() + $('[name=cal]').val() + $('[name=b]').val())
            })
        }) 
    </script>
</body>

</html>