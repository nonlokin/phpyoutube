<?php
	$connect = mysqli_connect("127.0.0.1", "root", "", "urok38");
	$text_zaprosa_vstavit = "INSERT INTO users (name, password, email, avatar, phone)
								VALUES ('{$_POST["name"]}', '{$_POST["password"]}', '{$_POST["email"]}', '{$_POST["avatar"]}', '{$_POST["phone"]}')";
	$zapros = mysqli_query($connect, $text_zaprosa_vstavit);

	header("Location:home.php")	
?>