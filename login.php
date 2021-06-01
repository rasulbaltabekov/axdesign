<?php include('server.php') 
?>

<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
  <title >Авторизация</title>
  <link rel="icon" href="img/doc.png" type="image/x-icon">
  <link rel="stylesheet" type="text/css" href="login.css">
  <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css">
  <script src="js/anime.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
</head>
<body>
  <div class="header" data-aos="fade-left">
  	<h2>Авторизация</h2>
  </div>
	 
  <form  method="post" action="login.php" data-aos="fade-left">
 <?php include_once 'error.php'?>
  	<div class="input-group" data-aos="fade-left">
  		<label >Логин</label>
  		<input type="text" name="user_login" >
  	</div>
  	<div class="input-group" data-aos="fade-left">
  		<label>Пароль</label>
  		<input type="password" name="user_password">
  	</div>
  	<div class="input-group">
  		<button type="submit" class="btn" name="login_user">Войти</button>
  	</div>
  	<p>
      
  		Не зарегистрированы? <a href="register.php">Зарегистрироваться</a>
  	</p>
  </form>
  <script src="script.js"></script>
  <script src="script1.js"></script>
  <script src="app.js"></script>
  <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
  <script>
    AOS.init();
  </script>
</body>

</html>
<script src="app.js"></script>  <script src="js/anime.js"></script>