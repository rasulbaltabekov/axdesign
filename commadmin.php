


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

   <h1 class="admins">Модерация отзыва</h1>
<div class="content row">
    <div class="column"><div class="adm">









<div class="ins">
<label class="shar">Модерация отзывов</label>

            
      
            <?php
$rage_id="150";
mysqli_set_charset($mysqli, "SET NAMES 'utf8'");
$result_set = $mysqli->query("SELECT * FROM `comments` ORDER BY `moder`='1' DESC LIMIT 1000");

?>


  <?php 
  while ($row = $result_set->fetch_assoc()) {
      ?>
      <div class="form-zvonok"> 
      <div class="containerr" data-aos="fade-right">
<p><span>Имя: <?php echo $row['name'] ?></span>Город: <?php echo $row['city'] ?></p> 
<p><span>Дата: <?php echo $row['date'] ?></span></p>
<p><?php echo $row['text_comments'] ?>.</p>
<td><a href="commentsBD.php?index=<?php echo $row['id']?>">Удалить</a></td>
<?php if($row['moder']==0)
{
    print "<label>Опубликован</label>";
}
else {
?>

<td><a href="\modercomm\modcom.php?index=<?php echo $row['id']?>">Опубликовать</a></td>


</div>
<?php  print "<label>Ожидает публикаций</label>"; }?>
      <?php
     }
    
    
  ?>
 
            </div>
            
            </form>
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