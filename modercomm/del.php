<?php include('bd.php') 
?>
<?php   

  $name = htmlspecialchars($name);// Преобразуем спецсимволы в HTML-сущности
  $text_comment = htmlspecialchars($text_comment);// Преобразуем спецсимволы в HTML-сущности

  $mysqli-> query("DELETE FROM `comments` ORDER BY `id` DESC
  LIMIT 1");
  // $mysqli->query ("UPDATE `lending` SET (`url`, `name`, `time`) VALUES ('$name', '$page_id', '$text_comment') WHERE id='.$_POST["id"].' ");
  header("location: commadmin.php");// Делаем реридект обратно ?>


