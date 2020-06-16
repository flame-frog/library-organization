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
            background-color: darkred;
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
    <div class="head">推荐书单</div>
    <form method="POST" action="recommend01.php">
        <span class="select" style="letter-spacing: 32px;"><input type="radio" name="gender" value="hot"
                checked="checked" id="hot"><label for="hot">热度</label></span>
        <span class="select"><input type="radio" name="gender" value="latest" id="latest"><label
                for="latest">最新入库</label></span><br>
        <input class="button" type="submit" name="search" value="生成书单">
    </form>
</body>

</html>
<?php