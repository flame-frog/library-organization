<?php
$type=$_POST['type']; // 搜索类型传入本页面
$mysqli = mysqli_connect("localhost", "root", "q123654987", "admin");
if (mysqli_connect_errno($mysqli)) {
    die("Failed to connect to MySQL: (" . mysqli_connect_errno() . ") " . mysqli_connect_error());
} else
	echo 'sucessful to connect to MySQL!<br/>';
// 输出表格
echo "<table border='4px' cellpadding='15px' cellspacing='0px'>";
if($type=='hot')
{
	$str="select bookName,catagory,frequency from bookborrow order by frequency DESC limit 10";//排名前十的图书
	echo"<tr><td align='center'>热书书单</td></tr>";
	echo"<tr><td>图书名</td><td>图书类别</td><td>频度</td></tr>";
}
if($type=='latest')
{
	$str="select bookName,catagory,inportData from booklist order by importData";
	echo"<tr align='center'>新书书单</tr>";
	echo"<tr><td>图书名</td><td>图书类别</td><td>上架时间</td></tr>";
}
$res=mysqli_query($conn,$str);
while($row==mysqli_fetch_row($res))
{
	echo '<tr><td>$row[0]</td><td>$row[1]</td><td>$row[2]</td></tr>';
}

echo "</table>";
// 表格输出完毕
echo "<a href='recommend.php' target='recommend01.php'>返回上一页面</a></br>";
echo "<a href='index.php' target='recommend01.php'>返回主页面</a></br>";
mysqli_close($conn);  //还差美化界面 -> TODO: 等测试阶段进行
?>
