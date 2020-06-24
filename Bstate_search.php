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

		html,
		body {
			height: 100%;
			background-color: rgb(173, 169, 129);
		}


		.head {
			text-align: center;
			font-family: Microsoft Yahei;
			font-size: 60px;
			font-weight: bold;
			color: white;
			height: 40%;
		}

		table {
			text-align: center;
			margin: 0px auto;
			border: 5px double;

			width: 35%;
		}

		a {
			color: white;
			font-size: 20px;
		}

		.bottom {
			text-align: center;
		}
	</style>
</head>


<body>

	<?php
	$id = $_REQUEST['type']; //接收id，值分别为bookname,bookid(bookNo)
	$bookInfo = $_POST['bookNo'];
	$conn = mysqli_connect('localhost', 'root', '');
	mysqli_select_db($conn, 'library');
	// 开始输出表格
	echo "<div class='head'><br>查询结果</div>";
	echo "<table border='4px' cellpadding='15px' cellspacing='0px'>";

	if ($id == 'bookid') {
		$str = "select bookNo,bookName,inLibStatus,bookPrice,category from book where bookNo='$bookInfo' "; //按编号从书单中查询书籍状态
	}
	if ($id == 'bookname') {
		$str = "select bookName,bookNo,inLibStatus,bookPrice,category from book where bookName like '%$bookInfo%'";
	}
	if ($res = mysqli_query($conn, $str))  //这个和mysql_query参数有一定的顺序差别，这个用不了反过来就行
	{

		echo "<tr><td>图书名</td><td>图书编号</td><td>在馆状态</td><td>图书价格</td><td>图书种类</td></tr>"; 
		while ($row = mysqli_fetch_row($res)) {
			echo "<tr><td>$row[0]</td><td>$row[1]</td><td>$row[2]</td><td>$row[3]</td><td>$row[4]</td></tr>";
		}
	}

	echo "</table>";
	// 表格输出结束
	echo "<div class='bottom'><br><a href='Bstate.php'>返回上一页</a></br>";
	echo "<a href='main.php'><br>回到首页</a></br><div>";
	mysqli_close($conn);  
	?>
</body>

</html>