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
<a id="button"></a>
<body>
<?php include('bd.php') 
?>
<!---Header-->
<?php


?>
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
                    <li><a href="#" class='header__link'>О нас!</a></li>
           </ul>
       </div>
      </div>
      
  </div>
</header>
<style>
.contents {

	margin: 0 auto;
	max-width: 100%;
	width:80%;
	margin-top: 50px;		
}
</style>
<div class="contents">
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
<p>Добро пожаловать <strong><?php echo $row['user_fio']; ?></strong></p>
<p>Ваш логин: <strong><?php echo $row['user_login']; ?></strong></p>
<p> <a href="index.php?logout='1'" style="color: red;">Выйти</a> </p>
<?php ?>
<style> 
.inf {
	max-width: 100%;
	width: 90;	
}
.comms {
	text-align: left;
	padding-left:100px;
}
table {
	margin: 0 auto;
font-family: "Lucida Sans Unicode", "Lucida Grande", Sans-Serif;

color: #686461;
}
table {

font-family: "Lucida Sans Unicode", "Lucida Grande", Sans-Serif;
font-size: 14px;


}

th, td:first-child {
	margin: 0 auto;
background: #AFCDE7;
color: black;
padding: 10px 20px ;
}
th, td {
	margin: 0 auto;
border-style: solid;
border-width: 0 1px 1px 0;
border-color: white;
}
td {
	margin: 0 auto;
color: black;
padding: 10px;
background: #D8E6F3;
}

th:first-child, td:first-child {
	
text-align: left;
}

</style>

			<div class="inf">
			  <table>
			  
    <tr>
        <td>Номер заказа</td>
        <td>Имя</td>
        <td>Email</td>
        <td>Цена</td>
        <td>Ваш комментарий</td>
        <td>Стилистика</td>
		<td>Статус</td>
		
    </tr>

	<?php
		  $result_set = $mysqli->query("SELECT * FROM `zakaz` WHERE `userlog`='".$_SESSION['user_login']."'");
		  //  $result_set = $mysqli->query("SELECT * FROM `comments` WHERE `rage_id`='$page_id'");
		  while ($row = $result_set->fetch_assoc()) {
			?>
    <tr>
	

        <td><strong><?php echo $row['ids']; ?></strong></td>
        <td><strong ><?php echo $row['name']; ?></strong></td>
        <td><strong><?php echo $row['email']; ?></strong></td>
        <td><strong><?php echo $row['cena']; ?></strong></td>
        <td><strong class="comms"><?php echo $row['comm']; ?></strong></td>
        <td><strong><?php echo $row['vybor']; ?></strong></td>
		<td><strong>
		<?php   if($row['moders']==0) 
			{
		echo "<strong >На Модераций</strong>";
		}else{
		echo "<strong>Принято</strong>";
	} 
		?></strong></td>
		
    </tr>
	</div>
			  <?php
			}	
		  ?>
</table>
	

			  
	

		  
		</div>
			  <?php
			}
		  ?>
		    
			
		
    

       
    <?php endif ?>
</div>
		
</body>
</html>