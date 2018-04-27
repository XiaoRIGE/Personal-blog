<?php
//		连接数据库
	include('conn.php');
	//获取前端传过来的值
	$title=$_POST['title'];
	$keywords=$_POST['keywords'];
	$describes=$_POST['describe'];
	$tags=$_POST['tags'];
	$pictureTitle=$_POST['pictureUpload'];
	$publicss=$_POST['publicss'];
	// $createtime=$_POST['createtime'];
	//$author=$_POST['author'];
	$content=$_POST['htmlstr2'];
	
	// echo $content;
	// $content = addcslashes($content);

	// var_dump($title,$describes,$content);
	// die;

	//将获取到的字段填入数据酷保存
	$sql="insert into article2(title,keywords,describes,tags,pictureTitle,publicss,content) values('$title','$keywords','$describes','$tags','$pictureTitle','$publicss','$content')";
	
	
	
	$r=mysqli_query($conn, $sql);
	
	if($r){
		echo '1';
	}
	else{
		echo '0';
	}
	
?>