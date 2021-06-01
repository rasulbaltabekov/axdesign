<?php include('bd.php') 
?>
<?php   
$name = $_POST["url"];
  $page_id = $_POST["nazv"];
  $id= $_POST["id"];
  $text_comment = $_POST["time"];
  $name = htmlspecialchars($name);// Преобразуем спецсимволы в HTML-сущности
  $text_comment = htmlspecialchars($text_comment);// Преобразуем спецсимволы в HTML-сущности
 
  $mysqli-> query("DELETE FROM `comments` WHERE `id`= '" . $_GET['index'] . "'");
  // $mysqli->query ("UPDATE `lending` SET (`url`, `name`, `time`) VALUES ('$name', '$page_id', '$text_comment') WHERE id='.$_POST["id"].' ");
  header("location: commadmin.php");// Делаем реридект обратно 
  

  
  ?>


