<?php
$id=$_REQUEST['bookno'];//接收id，为读者输入的图书编号

$conn=mysqli_connect('localhost','root','');
mysqli_select_db($conn,'test');//数据库为test
if($id)
{
	$str="select bookNo,bookName,readerNo,readerName,borrowDate,returnDate from borrowBook,returnBook where bookNo='$id' ";//按编号查询某图书的借阅历史
	$res=mysqli_query($conn,$str);
	echo "<table border='4px' cellpadding='15px' cellspacing='0px'>";
echo"<tr align='center'>查询结果</tr>";
echo"<tr><td>图书编号</td><td>图书名</td><td>读者号</td><td>读者名</td><td>借阅日期</td><td>还书日期</td></tr>";
}
if($res=mysqli_query($conn,$str))  //这个和mysql_query参数有一定的顺序差别，这个用不了反过来就行
{
	while($row=mysqli_fetch_row($res))
{
	echo '<tr><td>$row[0]</td><td>$row[1]</td><td>$row[2]</td><td>$row[3]</td><td>$row[4]</td><td>$row[5]</td></tr>';
	
}
}

echo "</table>";
echo "<a href='Bborr_history.php' target='Bborr_historyS.php'>返回上一页面</a></br>";
echo "<a href='index.php' target='Bborr_historyS.php'>返回主页面</a></br>";
mysqli_close($conn);  //还差美化界面

	

?>