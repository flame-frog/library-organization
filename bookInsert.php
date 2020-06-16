<?php
$bookNo=$_REQUEST['bookNo'];//书籍编号
$bookName=$_REQUEST['bookName'];//书名
$importDate=$_REQUEST['importDate'];//导入日期
$inLibStatus=$_REQUEST['inLibStatus'];//在馆状态
$bookStatus=$_REQUEST['bookStatus'];//书籍状态
$bookPrice=$_REQUEST['bookPrice'];//书籍价格(2位小数点)
$frequ=$_REQUEST['frequency'];//借书频率
$category=$_REQUEST['category'];//书籍种类

$mysqli = mysqli_connect("localhost", "root", "", "library");
if (mysqli_connect_errno($mysqli)) {
    die("Failed to connect to MySQL: (" . mysqli_connect_errno() . ") " . mysqli_connect_error());
} else
    echo 'sucessful to connect to MySQL!<br/>';
//插入书籍信息命令
$demand = "INSERT INTO book values('$bookNo','$bookName','$importDate','$inLibStatus','$bookStatus',$bookPrice,$frequ,'$category')";
$res=mysqli_query($mysqli,$demand);
if ($res) {
    echo "Insert sucessfully!<br/>";
} else {
    echo "Insert failed!<br/>";
}
mysqli_free_result($res);
mysqli_close($mysqli);
?>
<a href="index.php">回到首页</a>
