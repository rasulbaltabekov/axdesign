<?php include('bd.php') 
?>
<?php   
$name = $_POST["url"];
  $id= $_POST["id"];
  $name = htmlspecialchars($name);// Преобразуем спецсимволы в HTML-сущности

  $mysqli->query("INSERT INTO `carousel` (`url`, `id`) VALUES ('$name', '$id')");// Добавляем комментарий в таблицу
  header("Location: ".$_SERVER["HTTP_REFERER"]);// Делаем реридект обратно ?>
