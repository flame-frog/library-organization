<?php
$gender=$_REQUEST['gender'];
$conn=mysqli_connect('localhost','root','');
mysqli_select_db($conn,'test');
if($search=='热度')
{
	$str="select bookName,catagory,frequency from bookborrow order by frequency DESC limit 10";//排名前十的图书
	$res=mysqli_query($conn,$str);
	echo "<table border='4px' cellpadding='15px' cellspacing='0px'>";
echo"<tr><td align='center'>热书书单</td></tr>";
echo"<tr><td>图书名</td><td>图书类别</td><td>频度</td></tr>";
}
if($search='最新入库')
{
	$str="select bookName,catagory,inportData from booklist order by importData";
	
	echo "<table border='4px' cellpadding='15px' cellspacing='0px'>";
echo"<tr align='center'>新书书单</tr>";
echo"<tr><td>图书名</td><td>图书类别</td><td>上架时间</td></tr>";
}
if($res=mysqli_query($conn,$str))  //这个和mysql_query参数有一定的顺序差别，这个用不了反过来就行
{
	while($row=mysqli_fetch_row($res))
{
	echo '<tr><td>$row[0]</td><td>$row[1]</td><td>$row[2]</td></tr>';
	
}
}

echo "</table>";
echo "<a href='recommend.php' target='recommend01.php'>返回上一页面</a></br>";
echo "<a href='index.php' target='recommend01.php'>返回主页面</a></br>";
mysqli_close($conn);  //还差美化界面

	

?>