<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>图书分类</title>
    <style>
        * {
            margin: 0;
            padding: 0;
        }

        .head {
            margin-top: 50px;
            text-align: center;
            text-decoration: underline;
            text-underline-position: below;
        }

        form {
            text-align: center;
            margin-top: 20px;
        }

        .button {
            border: none;
            background-color: #892844;
            width: 80px;
            padding: 10px 10px;
            color: white;
            margin-top: 20px
        }

        .select {
            margin: 0 50px;
        }
    </style>
</head>

<body>
    <div class="head">查询图书借阅历史</div>
    <form method="POST" action="Bborr_historyS.php">
        
				请输入图书编号：<input name='bookno' type='text'/></br>
		<input class="button" type="submit" name="search" value="查询"></br>
    </form>
</body>

</html>
<?php