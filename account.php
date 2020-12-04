<!DOCTYPE html>
<html>
<head>
	<title></title>
	<meta charset="UTF-8">
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">	
</head>
<body>
	<?php
		$connect = mysqli_connect("127.0.0.1", "root", "", "urok38");
		$text_zaprosa = "SELECT * FROM videos INNER JOIN users ON videos.userID = users.id WHERE users.id = '{$_GET["id"]}'";
		$zapros = mysqli_query($connect, $text_zaprosa);
		for($i=0;$i<$zapros->num_rows;$i++){
				$stroka = $zapros->fetch_assoc();
			}
	?>	



	<div class="" style="">
		<img src="img/7.jpg" class="w-25">
	</div>


	<form action="change.php" method="GET">
		<input type="" name="name" value="<?php echo $stroka["name"]?>" class="form-control mt-2 col-3 ml-2">
		<input type="" name="phone" value="<?php echo $stroka["phone"]?>" class="form-control mt-2 col-3 ml-2">
		<input type="" name="email" value="<?php echo $stroka["email"]?>" class="form-control mt-2 col-3 ml-2">
		<input type="hidden" name="id" value="<?php echo $_GET["id"]?>">
		<button class="btn bg-primary text-white col-3 mt-2 ml-2">Изменить	</button>
	</form>
	<a href="home.php?id=<?php echo $_GET["id"]?>"><button class="btn bg-warning text-white ml-2 mt-2" >Назад	</button></a>
</body>
</html>