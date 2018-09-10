<?php
	
	//获取请求的参数
	$name = $_POST['name'];

	//数据库检测
	$pdo = new PDO('mysql:host=localhost;dbname=phone;charset=utf8','root','');

	$stmt = $pdo -> prepare('select * from users where name =  ?');

	$arr = [$name];

	$stmt->execute($arr);

	$user = $stmt -> fetch();

	if($user === false){
		echo '1';
	}else{
		echo '0';
	}