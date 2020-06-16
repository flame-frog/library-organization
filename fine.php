<?php
$serialNum=$_REQUEST['serialNumber'];
$readerNo=$_REQUEST['readerNo'];
$bookNo=$_REQUEST['bookNo'];
$fine=$_REQUEST['fine'];
$lossResult=$_REQUEST['lossResult'];

$mysqli = mysqli_connect("localhost", "root", "", "library");
if (mysqli_connect_errno($mysqli)) {
    die("Failed to connect to MySQL: (" . mysqli_connect_errno() . ") " . mysqli_connect_error());
} else
    echo 'sucessful to connect to MySQL!<br/>';
//插入罚款信息命令
$demand = "INSERT INTO fine values($serialNum,'$readerNo','$bookNo',$fine,'$lossResult')";
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
