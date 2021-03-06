<!DOCTYPE html>
<html lang="en">
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


   
        


<body>
<!---Header-->

   <header class="header"  >
       <div class="container">
           <div class="header__inner">
               <div class="header__logo">
                   <img class="ras" src="img/logo.png" alt="">
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



   <div class="intro1" id="intro" data-aos="fade-in">
     
     
       <div class="container" data-aos="fade-right">
           
           <div class="intro__inner">

           <h1 class="intro__title">?????????? ????????????!</h1>
           
           <h2 class="intro__subtext">?????? ???? ???????????? ???????????????? ???????????? ???? ??????????????????, ?????? ???? ?????????? ???????????????? ?????????????????? ?????????? ???? ???????????? ????????????!</h2>
        
       </div>
       
   </div>
   
</div>
   
<div class="contentsin">
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
<p>?????????? ???????????????????? <strong><?php echo $row['user_fio']; ?></strong></p>
<p>?????? ??????????: <strong><?php echo $row['user_login']; ?></strong></p>
<p> <a href="index.php?logout='1'" style="color: red;">??????????</a> </p>
<?php ?>
</style>
			<div class="inf">
			  <table>		  
    <tr>
        <td>?????????? ????????????</td>
        <td>??????</td>
        <td>Email</td>
        <td>????????</td>
        <td>?????? ??????????????????????</td>
        <td>????????????????????</td>
		<td>????????????</td>	
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
		echo "<strong >???? ??????????????????</strong>";
		}else{
		echo "<strong>??????????????</strong>";
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
</div>

      
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
  <script>
    AOS.init();
  </script>
  
</body>

</html>