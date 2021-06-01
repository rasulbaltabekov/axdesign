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
<!---Header-->
<?php
session_start(); 

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
                    <li><a href="status.php" class='header__link'>Статус заявки!</a></li>
           </ul>
       </div>
      </div>
      
  </div>
</header>


<?php if(isset($_SESSION["user_login"])): ?>
   <!---intro-->

   <div class="intro1" id="intro" data-aos="fade-in">
     
     
       <div class="container" data-aos="fade-right">
           
           <div class="intro__inner">

           <h1 class="intro__title">Отзывы</h1>
           
           <h2 class="intro__subtext">Можете оставить отзыв!</h2>
        
       </div>
       
   </div>
   
</div>
<h1 class="text1">Отзывы пользователей!</h1>

<div class="message">

<?php if(isset($_SESSION["successMessage"])){ ?>
    <div align="center" class="alert alert-success" id="successMessage">
        <?php
            echo $_SESSION["successMessage"]; // выводим сообщение
            unset($_SESSION["successMessage"]); // после вывода сразу удаляем переменную из глобального массива, для решения проблемы f5
        ?>
    </div>
<?php } ?>
 

<?php if(isset($_SESSION["errorMessage"])){ ?>
    <div align="center" class="alert alert-danger" id="errorMessage">
        <?php
            echo $_SESSION["errorMessage"];
            unset($_SESSION["errorMessage"]);
        ?>
    </div>
<?php } ?>
</div>
<div class="dann">
<?php include "dannie.php"; ?>

</div>



<h1 class="text1">Оставьте свой отзыв!</h1>
<div class="comm" data-aos="fade-right">

<form name="comment" id="comment" action="comm.php" autocomplete="off"   method="POST" enctype="multipart/form-data">
  <p class="razor">
    <label>Имя:</label>
    <input type="text" required id="login" name="name" maxlength="20"/>
  </p>
  <p class="razor">
    <label>Город:</label>
    <input type="text" required id="login" name="city" maxlength="25" />
  </p>
  <p class="razor">
    <label>Комментарий:</label>
    <br />
    <textarea name="text_comment" cols="30" rows="50" maxlength="350" required id="login"></textarea>
  </p>
  <p class="razor">
    <input type="hidden" name="page_id" value="150" />
    <?php  ?>
   
  </p>


  <?php
if ( !isset($_POST['answ'])||(!isset($_SESSION['ans'])) )
{

	$one=rand(0,20);
	$two=rand(0,20);
	
	if (rand(0,1)>0)
	{
		$_SESSION['ans']=$one+$two;
    echo '<div id="captcha" class="captcha"><h1>'. "$one+$two=" .'</h1></div>';
	}
	else
	{
		$_SESSION['ans']=$one-$two;
    echo '<div  id="captcha" class="captcha"><h1>'. "$one-$two=" .'</h1></div>';
	}

}
?>
<form action="<?= $_SERVER['PHP_SELF'] ?>">
 <input type="text" required id="login" name="answ"><br />



               
<input class="bot-send-mail" id="btn" type='submit' value='Послать заявку' >

</form>

</form>
</div>
<?php else : ?>
  

  <div class="intro1" id="intro" data-aos="fade-in">


<div class="container" data-aos="fade-right">

<div class="intro__inner">

<h1 class="intro__title">Отзыв!</h1>

<h2 class="intro__subtext">Чтобы оставить отзыв вам нужно войти!</h2>

</div>

</div>

</div>
<h1 class="text1">Отзывы пользователей!</h1>
<div class="dann">
<?php include "dannie.php"; ?>
</div>

<div class="logg">
<h1 class="text3" data-aos="fade-in"><a href="login.php">Войдите</a> или <a href="register.php">зарегистрируйтесь</a></h1>

</div>
<?php endif; ?>

<footer class="py-3">
  <div class="copy-bottom-txt text-center py-3">
  <p> 
  © 2021 AxDesign. All Rights Reserved | Design by <a href="https://www.instagram.com/xxvi.vii.mmi/" target="_blank">Rasul Baltabekov</a>
  </p>
  </div>
  <div class="social-icons mt-lg-3 mt-2 text-center">
  <ul>
  <li><a href="#"><span class="fa fa-vk"></span></a></li>
  <li><a href="#"><span class="fa fa-instagram"></span></a></li>
  <li><a href="#"><span class="fa fa-rss"></span></a></li>
  </ul>
  </div>
  </footer>
  <img class="back_to_top" title="Наверх" src="img/up.png" >
  <script src="script.js"></script>
  <script src="app.js"></script>
  <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
  <script src="https://use.fontawesome.com/df966d76e1.js"></script>
  <script src="script1.js"></script>
  <script>
    AOS.init();
  </script>

</body>
</html>