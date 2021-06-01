<?php   
$name = $_POST["url"];
  $id= $_POST["id"];
  $name = htmlspecialchars($name);// Преобразуем спецсимволы в HTML-сущности
  $mysqli = new mysqli("localhost", "root", "", "test");// Подключается к базе данных
  $mysqli->query("INSERT INTO `carousel` (`url`, `id`) VALUES ('$name', '$id')");// Добавляем комментарий в таблицу
  header("Location: ".$_SERVER["HTTP_REFERER"]);// Делаем реридект обратно ?>
