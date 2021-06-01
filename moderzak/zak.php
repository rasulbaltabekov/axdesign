<?php include('bd.php') 
?>
<?php   
$mod = "1";


mysqli_set_charset($mysqli, "SET NAMES 'utf8'");
 

 $mysqli->query("UPDATE `zakaz`  SET `moders`=$mod WHERE `ids`= '" . $_GET['index'] . "'");// Добавляем комментарий в таблицу

  // $mysqli->query ("UPDATE `lending` SET (`url`, `name`, `time`) VALUES ('$name', '$page_id', '$text_comment') WHERE id='.$_POST["id"].' ");
  header("Location: ".$_SERVER["HTTP_REFERER"]);
  ?>
