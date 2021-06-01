


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    
    <link rel="stylesheet" href="admins.css">

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css">
    <link href="https://fonts.googleapis.com/css?family=Merriweather:400,900,900i" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@200&display=swap" rel="stylesheet">
<link rel="preconnect" href="https://fonts.gstatic.com">
<link href="https://fonts.googleapis.com/css2?family=Exo+2:wght@300&display=swap" rel="stylesheet">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ADMIN</title>
</head>
<body>
<?php include('server.php') ?>
<?php

 

if( $_SESSION['user_login']=='admin')
{
  echo 'Администратор';
  
}
else
{
echo 'Гость';
header("location: login.php");

}

?>

<?php 


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

<div class="header">
	<h2>Home Page</h2>
</div>
<div class="content">
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
    	<p>Welcome <strong><?php echo $_SESSION['user_login']; ?></strong></p>
    	<p> <a href="admin.php?logout='1'" style="color: red;">logout</a> </p>
      
        
    <?php endif ?>
</div>

<header class="header"  >
       <div class="container">
           <div class="header__inner">
               <div class="header__logo">
               <a href="index.php">  <img class="ras" a href="index.html" src="img/logo.png" alt=""> </a>
                   <a id="button"></a>
               </div>
               
          
           
           </div>
           
       </div>
   </header>
   <td><a href="commadmin.php">Модерация отзывов</a></td>
   <td><a href="commadmin.php">Модерация Заказов</a></td>
   <h1 class="admins">АДМИН ПАНЕЛЬ ГЛАВНОЙ СТРАНИЦЫ</h1>
<div class="content row">
    <div class="column"><div class="adm">
    <label>ОБРАБОТКА ФОТОГРАФИЙ</label>

    <img class="ras" a href="index.html" src="img/qwer.png" alt="">

 




<div class="ins">
<label class="shar">Добавление записи</label>


<?php
$mysqli = new mysqli("localhost", "root", "", "test");
mysqli_set_charset($mysqli, "SET NAMES 'utf8'");
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
<?php if($row['moders']==1)
{
?>
<p class="mod1">На Модераций</p>
<?php
}	else {
?>
<td><a href="moderzak\zak.php?index=<?php echo $row['ids']?>">Принять</a></td>
<?php
}	
?>
<?php
}	
?>
  
	</div>
<style>
    .column{border: 1px solid #DDD;
    padding: 10px 10px;
    width:  600px;
    float: left;
    height:100x; //например
    }
.row:after{
content: "";
display: table;
clear: both;
}
</style>

</body>
</html>