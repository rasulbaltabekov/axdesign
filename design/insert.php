<?php include('bd.php') 
?>
<?php   
$name = $_POST["url"];
  $page_id = $_POST["nazv"];
  $id= $_POST["id"];
  $text_comment = $_POST["time"];
  $name = htmlspecialchars($name);// Преобразуем спецсимволы в HTML-сущности
  $text_comment = htmlspecialchars($text_comment);// Преобразуем спецсимволы в HTML-сущности
  $city = htmlspecialchars($city);
 
  $mysqli->query("INSERT INTO `design` (`url`, `name`, `time`, `id`) VALUES ('$name', '$page_id', '$text_comment', '$id')");// Добавляем комментарий в таблицу
  header("Location: ".$_SERVER["HTTP_REFERER"]);// Делаем реридект обратно ?>
