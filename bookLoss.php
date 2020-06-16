<?php
$bookNo=$_REQUEST['bookNo'];//书籍编号
$lossResult=$_REQUEST['lossResult'];//书籍的丢失状态
$recordDate=$_REQUEST['recordDate'];//书籍记录日期(YYYY-MM-DD)
$mysqli = mysqli_connect("localhost", "root", "q123654987", "library");
if (mysqli_connect_errno($mysqli)) {
    die("Failed to connect to MySQL: (" . mysqli_connect_errno() . ") " . mysqli_connect_error());
} else
    echo 'sucessful to connect to MySQL!<br/>';
//插入书籍遗失信息命令
$demand = "INSERT INTO loss values('$bookNo','$lossResult','$recordDate')";
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
