<!DOCTYPE html>
<html lang="en">

<head>
<meta charset ="UTF-8">
<title>总功能</title>
<style>
	
	
	html,body    <!--用来使div全屏显示-->
	{
     width:100%;
     height:100%;
	}
	    
		
 #divsize    <!--设置背景颜色-->
		{
		width:100%;
		height:100%;
		background-color:#336699;
		}
		
		
 .titledemo   <!--设置标题的样式-->
		{ 
		  color:white;
		  font-family:仿宋;
		  font-size:80px;
		  font-weight:bold;
		  text-align :center;
		  }
		 
		 
	.titlepos   <!--设置标题的位置-->
		{
		position:absolute;
		top:0;
		width:100%;
		height:25%;
		}
		
		
		
   .tablepos  <!--设置表格的样式和位置-->
		{
		position:absolute;
		top:35%;
		left:10%;
		width:100%;
		height:64%;
		}
    td      <!--设置单元格的大小和字体大小-->
	   {
	   font-size:25px;
	   width:30%;
	   }
	   
	  a   <!--设置显示链接字的颜色-->
	   {
	   color:#CCCCCC;
	   }
</style>
</head>



<body>
<div id="divsize">
<h1 class="titlepos titledemo">欢迎使用图书馆服务系统</h1>

<table class="tablepos">
<tr>  <td> <a href="inlib" >查询图书在馆状态</a> </td>  <td><a href="addreader.php">新增读者</a></td>  <td><a href="xiajia.php">过遗下架</a></td>  </tr>
<tr>  <td> <a href="bookhis.php">查询图书借阅历史</a></td>  <td><a href="addbook.php">上架新书</a></td>  <td><a href="fine.php">逾期罚款</a></td>  </tr>
<tr>  <td> <a href="readerhis.php">查询读者借阅记录</a></td>  <td><a href="recommand.php">热书推荐</a></td>  <td><a href="xiuli.php">破损修理</a></td>  </tr>
<tr>  <td> <a href="borrow.php">借阅图书</a></td>  <td><a href="back.php">归还图书</a></td><td></td></tr>
</table>

</div>

</body>
</html>