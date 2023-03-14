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
    <table>
        <tr>
            <td colspan="7"><input id="result" type="text" disabled></td>
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
        var a = '', b = '', cal = '';

        $(function() {
            $('input').click(function() {
                var v = $(this).val();
                switch(v) {
                    case '+':
                    case '-':
                    case '*': 
                    case '/':
                    case '%':
                        cal = v
                        break;
                    case '=':
                        //submit data
                        onSubmit()
                        break;
                    case 'AC':
                    case 'C':
                        a= '';
                        b= '';
                        cal = '';
                    default:
                        if(cal != '') {
                            //nhap B
                            b += v
                        }else {
                            //nhap A
                            a += v
                        }
                        break;
                }

                $('#result').val(a + cal + b)
            })
        })
        
        function onSubmit() {
            onSubmitPOST()
        }

        function onSubmitPOST() {
            $.post('cal.php', {
                'a': a,
                'b': b,
                'cal': cal
            }, function(data) {
                console.log(data)
                $('#result').val(a+cal+b+'='+data)
            })
        }
    </script>
</body>

</html>