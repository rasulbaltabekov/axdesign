


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
<?php include('bd.php') 
?>
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
   <td><a href="modzakaz.php">Модерация Заказов</a></td>
   <h1 class="admins">АДМИН ПАНЕЛЬ ГЛАВНОЙ СТРАНИЦЫ</h1>
<div class="content row">
    <div class="column"><div class="adm">
    <label>ОБРАБОТКА ФОТОГРАФИЙ</label>

    <img class="ras" a href="index.html" src="img/qwer.png" alt="">

 




<div class="ins">
<label class="shar">Добавление записи</label>
<form id="obratnuj-zvonok" class="obratnuj-zvonok" autocomplete="off" action="obrabotka/insert.php" method="POST" enctype="multipart/form-data">
            <div class="form-zvonok"> 
            <div class="forms">
                <label>ID Картинки (нумерация)<span>*</span></label>
                <input type='number' name='id' required  ></div>
              <div class="forms">
                <label>URL Картинки (ссылка)<span>*</span></label>
                <input type='text' name='url' required  ></div>
              <div class="forms">
                <label class="email">Текст под картинкой<span>*</span></label>
                <input  type='text' name='nazv' required ></div>
              <div class="forms">
                <label>Время работы (Пример: Время работы: 4 часа)*</label>
                <input  type='text' name='time'required ></div>
                <input class="bot-send-mail" type='submit' value='Добавить'>
            </div>
            
            </form>
            </div>

<div class="upd">
            <label class="shar">Обновление записи</label>

            <form id="obratnuj-zvonok" class="obratnuj-zvonok" autocomplete="off" action="obrabotka/update.php" method="POST" enctype="multipart/form-data">
            <div class="form-zvonok"> 
            <div class="forms">
            <label>ID Картинки (нумерация)<span>*</span></label>
                <input type='number' name='id' required  ></div>
              <div class="forms">
                <label>URL Картинки (ссылка)<span>*</span></label>
                <input type='text' name='url' required  ></div>
              <div class="forms">
                <label class="email">Текст под картинкой<span>*</span></label>
                <input  type='text' name='nazv' required ></div>
              <div class="forms">
                <label>Время работы (Пример: Время работы: 4 часа)*</label>
                <input  type='text' name='time'required ></div>
              
             
        
                <input class="bot-send-mail" type='submit' value='Обновить'>
            </div>
            
            </form>
            </div>
            <label class="shar">Удаление записи</label>
<div class="del">
<form id="obratnuj-zvonok" class="obratnuj-zvonok" autocomplete="off" action="obrabotka/delete.php" method="POST" enctype="multipart/form-data">
<div class="form-zvonok"> 
<div class="forms">
    <label>ID Картинки для удаление (нумерация)<span>*</span></label>
    <input type='number' name='id' required  ></div>

 

    <input class="bot-send-mail" type='submit' value='Удалить'>
</div>
</div>
</div>
</form></div>
    <div class="column"><div class="adm">
    <label>РАЗЛИЧНЫЕ ДИЗАЙНЫ</label>
    <img class="ras" a href="index.html" src="img/qwert.png" alt="">
<div class="ins">

<label class="shar">Добавление записи</label>
<form id="obratnuj-zvonok" class="obratnuj-zvonok" autocomplete="off" action="design/insert.php" method="POST" enctype="multipart/form-data">
            <div class="form-zvonok"> 
            <div class="forms">
            <label>ID Картинки (нумерация)<span>*</span></label>
                <input type='number' name='id' required  ></div>
              <div class="forms">
                <label>URL Картинки (ссылка)<span>*</span></label>
                <input type='text' name='url' required  ></div>
              <div class="forms">
                <label class="email">Текст под картинкой<span>*</span></label>
                <input  type='text' name='nazv' required ></div>
              <div class="forms">
                <label>Время работы (Пример: Время работы: 4 часа)*</label>
                <input  type='text' name='time'required ></div>
             
        
                <input class="bot-send-mail" type='submit' value='Добавить'>
            </div>
            
            </form>
            </div>

<div class="upd">
            <label class="shar">Обновление записей</label>

            <form id="obratnuj-zvonok" class="obratnuj-zvonok" autocomplete="off" action="design/update.php" method="POST" enctype="multipart/form-data">
            <div class="form-zvonok"> 
            <div class="forms">
            <label>ID Картинки (нумерация)<span>*</span></label>
                <input type='number' name='id' required  ></div>
              <div class="forms">
                <label>URL Картинки (ссылка)<span>*</span></label>
                <input type='text' name='url' required  ></div>
              <div class="forms">
                <label class="email">Текст под картинкой<span>*</span></label>
                <input  type='text' name='nazv' required ></div>
              <div class="forms">
                <label>Время работы (Пример: Время работы: 4 часа)*</label>
                <input  type='text' name='time'required ></div>
             
        
                <input class="bot-send-mail" type='submit' value='Обновить'>
            </div>
            
            </form>
            </div>
            <label class="shar">Удаление записи</label>
<div class="del">
<form id="obratnuj-zvonok" class="obratnuj-zvonok" autocomplete="off" action="design/delete.php" method="POST" enctype="multipart/form-data">
<div class="form-zvonok"> 
<div class="forms">
<label>ID Картинки для удаление (нумерация)<span>*</span></label>
    <input type='number' name='id' required  ></div>

 

    <input class="bot-send-mail" type='submit' value='Удалить'>
</div>
</div>
</div>
</form></div>

<?php

  mysqli_set_charset($mysqli, "SET NAMES 'utf8'");
  $result_set = $mysqli->query("SELECT * FROM `carousel`"); 
?>
    <div class="column"><div class="adm">
    <label>ФОТОГРАФИЙ В КАРУСЕЛЕ</label>
    <img class="ras" a href="index.html" src="img/qwerty.png" alt="">
<div class="ins">
<label class="shar">Добавление записи</label>
<form id="obratnuj-zvonok" class="obratnuj-zvonok" autocomplete="off" action="carousel/insert.php" method="POST" enctype="multipart/form-data">
            <div class="form-zvonok"> 
          
              <div class="forms">
                <label>URL Картинки (ссылка)<span>*</span></label>
                <input type='text' name='url' required  ></div>
        
                <input class="bot-send-mail" type='submit' value='Добавить'>
            </div>
            
            </form>
            </div>

<div class="upd">
            <label class="shar">Обновление записей</label>

            <form id="obratnuj-zvonok" class="obratnuj-zvonok" autocomplete="off" action="carousel/update.php" method="POST" enctype="multipart/form-data">
            <div class="form-zvonok"> 
            <div class="forms">
                <label>ID Картинки (нумерация)<span>*</span></label>
                <input type='number' name='id' required  ></div>
              <div class="forms">
                <label>URL Картинки (ссылка)<span>*</span></label>
                <input type='text' name='url' required  ></div>
             
        
                <input class="bot-send-mail" type='submit' value='Обновить'>
            </div>
            
            </form>
            </div>
            <label class="shar">Удаление записи</label>
<div class="del">
<form id="obratnuj-zvonok" class="obratnuj-zvonok" autocomplete="off" action="carousel/delete.php" method="POST" enctype="multipart/form-data">
<div class="form-zvonok"> 
<div class="forms">
    <label>ID Картинки (нумерация)<span>*</span></label>
    <input type='number' name='id' required  ></div>

 

    <input class="bot-send-mail" type='submit' value='Удалить'>
</div>
</div>
</div>
</form></div>
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