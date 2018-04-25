<?php
//		连接数据库
	include('conn.php');
	//获取前端传过来的值
	
	
	$sql="select * from article order by createtime DESC";
		
	$rs=mysqli_query($conn, $sql);
	
	
//	echo $sql;
//	exit;
	$data=[];
	while($row=mysqli_fetch_assoc($rs)){
		array_push($data,$row);
	}
	
	echo json_encode($data);
	
?>