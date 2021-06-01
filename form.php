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
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script> 
    <script src="jquery.maskedinput.js"></script>
<link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@200&display=swap" rel="stylesheet">
<script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/2.0.3/jquery.min.js"></script>
  <script src="ajax.js"></script>
<link rel="preconnect" href="https://fonts.gstatic.com">
<link href="https://fonts.googleapis.com/css2?family=Exo+2:wght@300&display=swap" rel="stylesheet">
<link rel="stylesheet" href="css/owl.carousel.min.css">
<link rel="stylesheet" href="css/owl.theme.green.min.css">
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
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
<body >
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

           <h1 class="intro__title">Форма заявки!</h1>
           
           <h2 class="intro__subtext">Тут вы можете оставить заявку на обработку, так же более подробно расписать чтобы вы хотели видеть!</h2>
        
       </div>
       
   </div>
   
</div>

<div class="message">

<?php if(isset($_SESSION["successMessage"])){ ?>
    <div align="center" class="alert alert-success" id="successMessage">
        <?php
            echo $_SESSION["successMessage"]; // выводим сообщение
            unset($_SESSION["successMessage"]); // после вывода сразу удаляем переменную из глобального массива, для решения проблемы f5
            
        ?>
   <style>
        .classs a {
font-size: 18px;
text-decoration: none;
font-weight: 700;
        }
        .classs a:hover {
font-size: 20px;
text-decoration: none;
font-weight: 700;
color: red;
        }
        </style>
        <h1 class="classs"><a href="status.php">Статус</a></h1>
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

<div class="otp" data-aos="fade-left">
    <div class="containerO">
      <h4 class="sent-notification"></h4>
        <form id="obratnuj-zvonok" class="obratnuj-zvonok" autocomplete="off"   method="POST" enctype="multipart/form-data"  action="telegram.php">
            <div class="form-zvonok"> 
            <p id="result_text"></p>
              <div class="forms">
                <label>Ваше Имя <span>*</span></label>
                <input type='text' name='username' required placeholder="Иван Иванов" ></div>
              <div class="forms">
                <label class="email">Ваш Email <span>*</span></label>
                <input  type='email' name='useremail' required placeholder="ivanivanov@mail.ru"></div>
              <div class="forms">
                <label>Ваша цена! (Тенге)</label>
                <input  type='number' onkeyup="this.value = this.value.replace(/[^\d]/g,'');" name='question' required step="0.01" min="0" placeholder="0,00" min="0" max="5000"></div>
             
                <div class="forms">
                 <label>Комментарий</label>
                <textarea name="ququ" id="" cols="50" rows="10" placeholder="Все что хотите :3"></textarea></div>
                <br/>
                <select class="sell" name="vybor">
                <option >Киберпанк</option>
                <option >Реализм</option>
                <option >Магия</option>
                <option >Мрачность</option>
                <option >Фэнтези</option>
                <option >Ретушь</option>
                <option >Создание обложки</option>
                <option >Другое</option>
              </select>  
        
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

<form action="<?= $_SERVER['PHP_SELF'] ?>"></form>

 <input type="text" name="answ"><br />
               
              <input class="bot-send-mail" id="btn" type='submit' value='Послать заявку'>
              
            </div>
            </form>
            <img class="formbg"  src="img/formBG.png" alt="">
            <?php else : ?>
  

              <div class="intro1" id="intro" data-aos="fade-in">
     
     
     <div class="container" data-aos="fade-right">
         
         <div class="intro__inner">

         <h1 class="intro__title">Форма заявки!</h1>
         
         <h2 class="intro__subtext">Чтобы заказать работу вам нужно зарегистрироваться!</h2>
      
     </div>
     
 </div>
 
</div>


<div class="logg">
<h1 class="text3" data-aos="fade-in"><a href="login.php">Войдите</a> или <a href="register.php">зарегистрируйтесь</a></h1>

            </div>
<?php endif; ?>
</div>
</div>
</div>

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