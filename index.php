<!DOCTYPE html>
<html lang="en">
<style type="text/css">
html { overflow-x: hidden; }
body { overflow-x: hidden; }
</style>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
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
<?php include('bd.php') 
?>
<?php

session_start();
if (isset($_GET['logout'])) {
  session_destroy();
  unset($_SESSION['user_login']);
  header("location: index.php");
}


?>


   
        


<body >
<!---Header-->
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
           <li><a href="form.php" class='header__link'>????????????????</a></li>
           <li><a href="comments.php" class='header__link'>????????????</a></li>
                    <li><a href="contacts.php" class='header__link'>????????????????</a></li>
                    <li><a href="allworks.php" class='header__link'>?????? ????????????</a></li>
                    <li><a href="status.php" class='header__link'>???????????? ????????????!</a></li>
           </ul>
       </div>
      </div>
      
  </div>
</header>




   <!---intro-->
   <?php if(isset($_SESSION["user_login"])): ?>
   <div class="intro" id="intro" data-aos="fade-in">
     <div class="video">
       
     </div>
       <div class="container" data-aos="fade-right">
           <div class="intro__inner">
           <?php 

		  mysqli_set_charset($mysqli, "SET NAMES 'utf8'");
		  $result_set = $mysqli->query("SELECT * FROM `users` WHERE `user_login`='".$_SESSION['user_login']."'");
		  while ($row = $result_set->fetch_assoc()) {
			  ?>
	<h1 class="intro__title">?????????? ????????????????????!</h1><h1 class="intro__title"><?php echo $row['user_fio'] ; ?> </h1>
           <h2 class="intro__subtext">?????? ???? ???????????? ???????????????? ?????????????????? ?????????? ?????????????????????? ?? ???????????? ????????????!</h2>
           <button class="btn btn--red" type="submit" onclick="location.href='form.php'"><a href="form.php" style="color: black;    text-decoration:none;">??????????????</a></button>
           <button class="btn btn--red" type="submit" onclick="location.href='index.php?logout='1'  '"><a href="index.php?logout='1'" style="color: black;    text-decoration:none;">??????????</a></button>   
		</div>
			  <?php
			}
		  ?>
           
          
          
         
          </form>
          
       </div>
   </div>
</div>


<?php else : ?>
  

  <div class="intro" id="intro" data-aos="fade-in">
     <div class="video">
       
     </div>
       <div class="container" data-aos="fade-right">
           <div class="intro__inner">
          
           <h1 class="intro__title">?????????? ????????????????????!</h1>
           <h2 class="intro__subtext">?????? ???? ???????????? ???????????????? ?????????????????? ?????????? ?????????????????????? ?? ???????????? ????????????, ?????????? ???????????????? ???????????? ?????? ?????????? ??????????!</h2>
           
           <form method="get" action="login.php">
      
           <button class="btn btn--red" type="submit" >??????????</button>
          </form>
          
       </div>
   </div>
</div>

<?php endif; ?>

<?php

  mysqli_set_charset($mysqli, "SET NAMES 'utf8'");
  $result_set = $mysqli->query("SELECT * FROM `lending` LIMIT 3");
?>   
<div class="container1" data-aos="fade-right"> 
  <h1 class="text1">?????????????????? ??????????????????????</h1>
    <div class="features" >
    <?php 
    while ($row = $result_set->fetch_assoc()) {
        ?>
       <div class="features__item" >
        <h1 class="text"><?php echo $row['id'] ?></h1>
        <img class="features__icon" src="<?php echo $row['url'] ?>" alt="" >
           <h4 class="features__title"><?php echo $row['name'] ?></h4>
           <div class="features__text"><?php echo $row['time'] ?></div>
       </div>
       <?php
      }
    ?>
</div>
<?php

  mysqli_set_charset($mysqli, "SET NAMES 'utf8'");
  $result_set = $mysqli->query("SELECT * FROM `design` LIMIT 3");
?>   
</div>
<div class="container1" data-aos="fade-left">
    <h1 class="text1">?????????????????? ??????????????</h1>
      <div class="features1">
      <?php 
    while ($row = $result_set->fetch_assoc()) {
        ?>
         <div class="features__item">
     
          <h1 class="text"><?php echo $row['id'] ?></h1>
    
           <img class="features__icon" src="<?php echo $row['url'] ?>" alt="" >
           <h4 class="features__title"><?php echo $row['name'] ?></h4>
           <div class="features__text"><?php echo $row['time'] ?></div>
         </div>
         <?php
      }
    ?>
  </div>
  
  </div>
  <h1 class="text3" >????????????????????????</h1>
  <div class="container5" data-aos="zoom-in"> 

    <div class="pre" data-aos="fade-in">
        <div class="preim">
     
           <div class="con">
         
            <img class="icon" src="https://img.icons8.com/office/80/000000/speech-bubble--v2.png"/>
             <h4 class="pretext">???????????? ???? ??????????!</h4>
             
           </div>
           <div class="con">
       
            <img class="icon" src="https://img.icons8.com/office/80/000000/checkmark--v1.png"/>
            <h4 class="pretext">???????????????????????? ????????????</h4>
          </div>
          <div class="con">
         
            <img class="icon" src="https://img.icons8.com/office/80/000000/clock--v1.png"/>
            <h4 class="pretext">?????? ?? ????????!</h4>
          </div>
          
    </div>
</div>
</div>
</div>
  </div>
  <?php

  mysqli_set_charset($mysqli, "SET NAMES 'utf8'");
  $result_set = $mysqli->query("SELECT * FROM `carousel` ");
?>   
  <div class="carousel" >
    <h1 class="text3" data-aos="fade-in">?????????? ?????????????? :3</h1>
    <div class="element-1 owl-carousel">
    <?php 
    while ($row = $result_set->fetch_assoc()) {
        ?>
      <div class="items">
        <img class="car" src="<?php echo $row['url'] ?>" alt="">
      </div>
      <?php
      }
    ?>


      
  </div>
  
  <footer class="py-3">
    <div class="copy-bottom-txt text-center py-3">
    <p> 
    ?? 2021 AxDesign. All Rights Reserved | Design by <a href="https://www.instagram.com/xxvi.vii.mmi/" target="_blank">Rasul Baltabekov</a>
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

    <!-- CDN ?????????????????????? ???????????? fontawesome -->
    <script src="https://use.fontawesome.com/df966d76e1.js"></script>

  <img class="back_to_top" id="back_to_top" title="????????????" src="img/up.png" >
  <script src="script.js"></script>
  <script src="script1.js"></script>
  <script src="app.js"></script>
  <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
  <script src="js/swup.min.js"> </script>
  <script>
    AOS.init();
  </script>
  
</body>

</html>