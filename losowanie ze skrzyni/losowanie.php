<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script type="text/javascript">
        function test()
        {
            $.ajax({url:"los.php" ,success:function(result)
            {
                $("div").text(result);
            }
        })
        }
        </script>
</head>
<body>
    <button onclick="test()">losuj</button>
    <div>

    </div>
</body>
</html>