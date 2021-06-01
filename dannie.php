<?php


  $page_id = 150;
  $mysqli = new mysqli("localhost", "root", "", "test");
  mysqli_set_charset($mysqli, "SET NAMES 'utf8'");
  $result_set = $mysqli->query("SELECT * FROM `comments` ORDER BY `date` DESC LIMIT 1000");
  //  $result_set = $mysqli->query("SELECT * FROM `comments` WHERE `rage_id`='$page_id'");
  




  
?>


    <?php 
    while ($row = $result_set->fetch_assoc()) {
      if ($row['moder']== 0) {
        
        ?>
        <div class="containerr" data-aos="fade-right">
     
  <p><span>Имя: <?php echo $row['name'] ?></span>Город: <?php echo $row['city'] ?></p> 
  <p><span>Дата: <?php echo $row['date'] ?></span></p>
  <p class="proftext"><?php echo $row['text_comments'] ?>.</p>
</div>
        <?php
      }
      }
      
    ?>

