<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>图书在馆状态</title>
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
            background-color: darkred;
            width: 160px;
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
    <div class="head">图书在馆状态</div>
    <form method="POST" action="Bstate_search.php"><!--action有待修改 -->
        <span class="select" style="letter-spacing: 0px;"><input type="radio" name="type" value="bookid"
                checked="checked" id="bookid"><label for="bookid">图书编号</label></span>
        <span class="select"><input type="radio" name="type" value="bookname" id="bookname"><label
                for="bookname">图书名称</label></span><br>
		请输入相应信息：<input name='bookstate' type='text'/></br>
		<input class="button" type="submit" name="search" value="查询"></br>
    </form>
</body>

</html>