<!Doctype html>
<html>
<head>
<title>Регестрация</title>
<link rel="stylesheet" type="text/css" href="style/reset.css">
<link rel="stylesheet" type="text/css" href="style/style.css">
<link rel="stylesheet" type="text/css" href="style/preloader.css">
<meta charset='utf8'>	
</head>
<body>

	<?php
include('php_modal/preloader.php');
	?>
<div id="text_box">
<h1>Все домашки.ру</h1>
</div>
<div id="block_reg_kasper">
	<div id="one">
	<img src="photo/sher.png" id="kasper_sher">
	</div>
<div id="block_reg">
	<h1>Регистрация</h1>
	<hr>
	<Form name="reg" method="POST">
		<input type="text" name="email" placeholder="Введите email..."><br>
		<input type="text" name="password" placeholder="придумайте пароль..."><br>
		<input type="text" name="password_1" placeholder="подтвердите пароль..."><br>
		<input class="sub" type="submit" name="reg" value="Регистрация">
	</Form>
		<a href="list/index_home.php">уже есть аккаунт?</a>

</div>
</div>

</body>
</html>
<?php
include_once 'php_modal/reg.php';
?>