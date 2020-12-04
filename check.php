<?php
	$connect = mysqli_connect("127.0.0.1", "root", "", "urok38");
	$text_zaprosa = "SELECT * FROM users WHERE name ='{$_GET["name"]}' AND password = '{$_GET["password"]}'";
	$zapros = mysqli_query($connect, $text_zaprosa);
	$stroka = $zapros->fetch_assoc();
	if($zapros->num_rows==0){
		header("location: index.php?error=Такого пользователя нет");
	} else {
		header("location: home.php?id=".$stroka["id"]);
	}
?>