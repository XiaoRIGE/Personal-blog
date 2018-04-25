<?php
	header('Content-Type:text/html; charset=utf-8');
	//连接数据库
	$conn = @mysqli_connect('127.0.0.1','root','123456','blog');
	mysqli_query($conn, 'set names utf8');