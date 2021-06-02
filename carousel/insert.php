<?php include('../bd.php')
?>
<?php   
$name = $_POST["url"];
  $id= $_POST["id"];
  $name = htmlspecialchars($name);// Преобразуем спецсимволы в HTML-сущности

  $mysqli->query("INSERT INTO `carousel` (`url`, `id`) VALUES ('$name', '$id')");// Добавляем комментарий в таблицу
  header("location: admin.php");// Делаем реридект обратно ?>
