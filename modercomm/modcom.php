<?php include('bd.php') 
?>
<?php   
$mod = "0";


mysqli_set_charset($mysqli, "SET NAMES 'utf8'");
 

 $mysqli->query("UPDATE `comments`  SET `moder`=$mod WHERE `id`= '" . $_GET['index'] . "'");// Добавляем комментарий в таблицу

  // $mysqli->query ("UPDATE `lending` SET (`url`, `name`, `time`) VALUES ('$name', '$page_id', '$text_comment') WHERE id='.$_POST["id"].' ");
  header("location: commadmin.php");
  ?>
