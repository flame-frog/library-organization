<?php
$readerNo=$_REQUEST['readerNo'];
$bookNo=$_REQUEST['bookNo'];
date_default_timezone_set(PRC);//设置为北京时间
$borrowDate=date("Y-m-d");//自动获取时间(年月日)

$mysqli = mysqli_connect("localhost", "root", "", "library");
if (mysqli_connect_errno()) {
    die("Failed to connect to MySQL: (" . mysqli_connect_errno() . ") " . mysqli_connect_error());
} else
    echo 'sucessful to connect to MySQL!<br/>';
//插入书籍借阅信息命令
$demand = "INSERT INTO borrowBook(readerNo,bookNo,borrowDate) values('$readerNo','$bookNo','$borrowDate')";
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
