<?php 
  session_start(); 

  if (!isset($_SESSION['user_login'])) {
  	$_SESSION['msg'] = "You must log in first";
  	header('location: login.php');
  }
  if (isset($_GET['logout'])) {
  	session_destroy();
  	unset($_SESSION['user_login']);
  	header("location: login.php");
  }


?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
  <script src="js/popper.min.js"></script>
  <script src="js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="css/bootstrap.min.css" >
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="comm.css">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link rel="preconnect" href="https://fonts.gstatic.com">
<link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@200&display=swap" rel="stylesheet">
<link rel="preconnect" href="https://fonts.gstatic.com">
<link href="https://fonts.googleapis.com/css2?family=Exo+2:wght@300&display=swap" rel="stylesheet">
<link rel="stylesheet" href="css/owl.carousel.min.css">
<link rel="stylesheet" href="css/owl.theme.green.min.css">
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
<script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/2.0.3/jquery.min.js"></script>
<script src='https://www.google.com/recaptcha/api.js?hl=ru'></script>
<link rel="icon" href="img/doc.png" type="image/x-icon">
<script src="js/owl.carousel.min.js"></script>
<script src="carouse.js"></script>
<script src="js/anime.js"></script>
<script src="js/validation.js"></script>
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>AxDesign</title>
</head>
<?php include('bd.php') 
?>
<a id="button"></a>
<body>
<header class="header"  >
  <div class="container">
      <div class="header__inner">
          <div class="header__logo">
          <a href="index.php">  <img class="ras" a href="index.html" src="img/logo.png" alt=""> </a>
          <a id="button"></a>
               </div>
               <button class="header__hamburger">
                <span></span>
                <span></span>
                <span></span>
            </button>
       <div class="header__menu">
           <ul class="header__list">
           
           <li><a href="form.php" class='header__link'>Заказать</a></li>
                    <li><a href="comments.php" class='header__link'>Отзывы</a></li>
                    <li><a href="contacts.php" class='header__link'>Контакты</a></li>
                    <li><a href="allworks.php" class='header__link'>Все работы</a></li>
                    <li><a href="status" class='header__link'>Статус заявки!</a></li>
           </ul>
       </div>
      </div> 
  </div>
</header>
   <!---intro-->



<div class="contentsin" >
<div class="contents">
<div class="block1" data-aos="fade-left">
  	<!-- notification message -->
  	<?php if (isset($_SESSION['success'])) : ?>
      <div class="error success" >
      	<h3>
          <?php 
          	echo $_SESSION['success']; 
          	unset($_SESSION['success']);
          ?>
      	</h3>
      </div>
  	<?php endif ?>
    <!-- logged in user information -->
    <?php  if (isset($_SESSION['user_login'])) : ?>
		<?php 

		  mysqli_set_charset($mysqli, "SET NAMES 'utf8'");
		  $result_set = $mysqli->query("SELECT * FROM `users` WHERE `user_login`='".$_SESSION['user_login']."'");
		  //  $result_set = $mysqli->query("SELECT * FROM `comments` WHERE `rage_id`='$page_id'");
		  while ($row = $result_set->fetch_assoc()) {
			  ?>         
<p class="dobro">Добро пожаловать <strong><?php echo $row['user_fio']; ?></strong></p>
<p>Ваш логин: <strong><?php echo $row['user_login']; ?></strong></p>
<p> <a href="index.php?logout='1'" style="color: red;">Выйти</a> </p>
<?php ?>
</div>

     
	<?php
		  $result_set = $mysqli->query("SELECT * FROM `zakaz` WHERE `userlog`='".$_SESSION['user_login']."'");
		  //  $result_set = $mysqli->query("SELECT * FROM `comments` WHERE `rage_id`='$page_id'");
		  while ($row = $result_set->fetch_assoc()) {
			?>
      <div class="contain" data-aos="zoom-in">
      <div class="block3">
      <h2 class="zakaz">Заказ номер: '<?php echo $row['ids']; ?>'</h2>

      </div>
      
    <div class="block2" data-aos="zoom-in">
 
    <h2 class="zakaz">Данные по заказу  </h2>

   <table >
    <tr>
        <td><p class="info">Ваше имя:</p></td>
        <td><p class="info1"> <?php echo $row['name']; ?></p></td>
    </tr>
    <tr>
        <td><p class="info">Ваш Email: </p></td>
        <td> <p class="info1"><?php echo $row['email']; ?></p></td>
    </tr>
    <tr>
        <td> <p class="info">Предложенная цена:  </p></td>
        <td> <p class="info1"><?php echo $row['cena']; ?> Тг</p></td>
    </tr>
    <tr>
        <td><p class="info">Стилистика: </p></td>
        <td><p class="info1"><?php echo $row['vybor'];?></p></td>
    </tr>
    <tr>
        <td><p class="info">Текст </p></td>
        <td><p class="info1"><?php echo $row['comm'];?></p></td>
    </tr>
</table>
		<?php   if($row['moders']==0) 
			{
        ?>
<p class="mod1">На Модераций</p>
        <?php
			}	else {
		  ?>
<p class="mod2">Заказ принят!</p>
	   <?php
			}	
		  ?>
  
	</div>
  <?php
			}	
		  ?>
	</div>
	

			  
	

		  
		</div>
    </div>
			  <?php
			}
		  ?>
		    
			
		
    

       
    <?php endif ?>
</div>
</div>

  <script src="script1.js"></script>
  <script src="app.js"></script>
  <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
  <script src="js/swup.min.js"> </script>
  <script>
    AOS.init();
  </script>
  
</body>
</html>