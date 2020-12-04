<?php
	$connect = mysqli_connect("127.0.0.1", "root", "", "urok38");	

	$text_zaprosa = "UPDATE users
	SET name = '{$_GET["name"]}', phone = '{$_GET["phone"]}', email = '{$_GET["email"]}'
	WHERE id = {$_GET["id"]}";
	mysqli_query($connect, $text_zaprosa);
	header("Location: home.php?id={$_GET["id"]}");
?>