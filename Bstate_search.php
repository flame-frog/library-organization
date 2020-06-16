<?php
$id=$_REQUEST['id'];//接收id，值分别为bookname,bookid(bookNo)

$conn=mysqli_connect('localhost','root','');
mysqli_select_db($conn,'test');
if($id=='bookid')
{
	$str="select bookNo,bookName,inLibStatus from booklist where bookNo='$id' ";//按编号从书单中查询书籍状态
	$res=mysqli_query($conn,$str);
	echo "<table border='4px' cellpadding='15px' cellspacing='0px'>";
echo"<tr align='center'>查询结果</tr>";
echo"<tr><td>图书编号</td><td>图书名</td><td>在馆状态</td></tr>";
}
if($id=='bookname')
{
	$str="select bookName,bookNo,inLibStatus from booklist where bookName='$id'";
	
	echo "<table border='4px' cellpadding='15px' cellspacing='0px'>";
echo"<tr align='center'>查询结果</tr>";
echo"<tr><td>图书名</td><td>图书编号</td><td>在馆状态</td></tr>";//按书名从书单中查询书籍状态
}
if($res=mysqli_query($conn,$str))  //这个和mysql_query参数有一定的顺序差别，这个用不了反过来就行
{
	while($row=mysqli_fetch_row($res))
{
	echo '<tr><td>$row[0]</td><td>$row[1]</td><td>$row[2]</td></tr>';
	
}
}

echo "</table>";
echo "<a href='Bstate.php' target='Bstate_search.php'>返回上一页面</a></br>";
echo "<a href='index.php' target='Bstate_search.php'>返回主页面</a></br>";
mysqli_close($conn);  //还差美化界面

	

?>