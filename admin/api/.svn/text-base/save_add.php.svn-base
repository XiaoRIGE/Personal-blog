<?php
//		连接数据库
	include('conn.php');
	//获取前端传过来的值
	$title=$_POST['title'];
	$describes=$_POST['describes'];
	$author=$_POST['author'];
	$content=$_POST['content'];
	
	$sql="insert into article(title,describes,author,content) values('$title','$describes','$author','$content')";
	
	
	
	$r=mysqli_query($conn, $sql);
	
	if($r){
		echo '1';
	}
	else{
		echo '0';
	}
	
?>