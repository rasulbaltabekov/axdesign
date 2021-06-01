<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css">
    <link href="https://fonts.googleapis.com/css?family=Merriweather:400,900,900i" rel="stylesheet">
  <script src="js/popper.min.js"></script>
  <script src="js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="css/bootstrap.min.css" >
    <link rel="stylesheet" href="style.css">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link rel="preconnect" href="https://fonts.gstatic.com">
<link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@200&display=swap" rel="stylesheet">
<link rel="preconnect" href="https://fonts.gstatic.com">
<link href="https://fonts.googleapis.com/css2?family=Exo+2:wght@300&display=swap" rel="stylesheet">
<link rel="icon" href="img/doc.png" type="image/x-icon">
<link rel="stylesheet" href="css/owl.carousel.min.css">
<link rel="stylesheet" href="css/owl.theme.green.min.css">
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
<script src="js/owl.carousel.min.js"></script>
<script src="carouse.js"></script>
<script src="js/anime.js"></script>
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>AxDesign</title>
</head>

<body>
<!---Header-->
<?php include('bd.php') 
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



   <!---intro-->

   <div class="intro1" id="intro" data-aos="fade-in">
     
     
       <div class="container" data-aos="fade-right">
           
           <div class="intro__inner">

           <h1 class="intro__title">Все работы!</h1>
           
           <h2 class="intro__subtext">В этой странице вы можете увидеть все работы автора!</h2>
        
       </div>
       
   </div>
   
</div>

</head>
<body>
<?php
 
  mysqli_set_charset($mysqli, "SET NAMES 'utf8'");
  $result_set = $mysqli->query("SELECT * FROM `carousel` ");
?>   
<div class="galleryy">
  <h1 class="text1">Галерея работ!</h1>
<?php 
    while ($row = $result_set->fetch_assoc()) {
        ?>
<div class="responsive"  data-aos="zoom-in">
  <div class="gallery" data-aos="fade-in">
    <a target="_blank" href="<?php echo $row['url'] ?>">
      <img src="<?php echo $row['url'] ?>" alt="" >
    </a>
    <div class="desc"><?php echo $row['id'] ?></div>
  </div>
</div>
<?php
      }
    ?>
</div>
<div class="clearfix"></div>

<div style="padding:6px;">

</div>

  
  <footer class="py-3">
    <div class="copy-bottom-txt text-center py-3">
    <p> 
    © 2021 AxDesign. All Rights Reserved | Design by <a href="https://www.instagram.com/xxvi.vii.mmi/" target="_blank">Rasul Baltabekov</a>
    </p>
    </div>
    <div class="social-icons mt-lg-3 mt-2 text-center">
    <ul>
    <li><a href="https://vk.com/gensux"><span class="fa fa-vk"></span></a></li>
    <li><a href="https://www.instagram.com/xxvi.vii.mmi/"><span class="fa fa-instagram"></span></a></li>
    <li><a href="#"><span class="fa fa-rss"></span></a></li>
    </ul>
    </div>
    </footer>

    <!-- CDN подключение иконок fontawesome -->
    <script src="https://use.fontawesome.com/df966d76e1.js"></script>

  <img class="back_to_top" id="back_to_top" title="Наверх" src="img/up.png" >
  <script src="script.js"></script>
  <script src="script1.js"></script>
  <script src="app.js"></script>
  <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
  <script>
    AOS.init();
  </script>

</body>

</html>