<?php
//开启session机制
		session_start();
//		连接数据库
	include('conn.php');
//		接收数据
	$username=$_GET['username'];
	$password=$_GET['password'];
//		验证数据有效性
	if(strlen($username)<3){
		exit("请输入正确的用户名长度");
	}
//	5) 构造SQL语句查询用户名和密码是否存在

	$sql="select * from admin where name='$username' and password='$password'";
//		用户名和密码是 并且关系
	

	$rs=mysqli_query($conn, $sql);
	//var_dump($rs);
//	6) 将查询的结果返回给客户端
	if(mysqli_num_rows($rs)>0){
		$row=mysqli_fetch_assoc($rs);
		//创建session
		$_SESSION['username']=$username;
		$_SESSION['password']=$password;
		echo '1';
	}
	else {
		echo '0';
	}
//		有数据：登陆成功
//		无数据：登陆失败

	
	
?>