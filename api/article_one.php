<?php
//		连接数据库
	include('conn.php');

	//获取前端传过来的值
	$id=$_GET["id"];

	$sql="select * from article where id='$id'";
		
	$rs=mysqli_query($conn, $sql);

	$data=[];
	while($row=mysqli_fetch_assoc($rs)){
		array_push($data,$row);
	}
	
	echo json_encode($data);
	
?>