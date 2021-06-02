<?php include('__DIR__/../bd.php')
?>
<?php   
$name = $_POST["url"];
  $page_id = $_POST["nazv"];
  $id= $_POST["id"];
  $text_comment = $_POST["time"];
  $name = htmlspecialchars($name);// Преобразуем спецсимволы в HTML-сущности
  $text_comment = htmlspecialchars($text_comment);// Преобразуем спецсимволы в HTML-сущности

  $mysqli-> query("DELETE FROM `carousel` WHERE `id`= '" . $_POST['id'] . "'");
  // $mysqli->query ("UPDATE `lending` SET (`url`, `name`, `time`) VALUES ('$name', '$page_id', '$text_comment') WHERE id='.$_POST["id"].' ");
  header("location: ../admin.php");// Делаем реридект обратно ?>


