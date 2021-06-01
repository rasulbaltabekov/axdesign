
<?php include('bd.php') 
?>
<?php
   session_start(); 


  

  if (is_numeric($_POST['answ'])) //проверяем число ли, если не делать то 0+0='' будет истинно
{
  if ((intval($_POST['answ']))===(intval($_SESSION['ans']))) //проверяем эквивалентностью опять же из-за возможного нуля в ответе
  {
    

    header("Location: comments.php"); //возвращаемся на страницу формы "GET" методом
    $mod = "1";
    $_SESSION["successMessage"] = "Ваш отзыв будет опубликован после модераций!";
  $name = $_POST["name"];
  $page_id = $_POST["page_id"];
  $text_comment = $_POST["text_comment"];
  $city = $_POST["city"];
  $date = date("Y-m-d H:i:s");
  $name = htmlspecialchars($name);// Преобразуем спецсимволы в HTML-сущности
  $text_comment = htmlspecialchars($text_comment);// Преобразуем спецсимволы в HTML-сущности
  $city = htmlspecialchars($city);

  $mysqli->query("INSERT INTO `comments` (`name`, `rage_id`, `text_comments`, `city`, `date`, `moder`) VALUES ('$name', '$page_id', '$text_comment', '$city', '$date', '$mod')");// Добавляем комментарий в таблицу

  }
  else 
  {
    header("Location: comments.php"); //возвращаемся на страницу формы "GET" методом
    $_SESSION["errorMessage"] = "Ошибка! Вы не правильно решили пример!";
    unset($_SESSION['ans']);
    unset($_POST['answ']);

  }
}
else
{
  header("Location: comments.php"); //возвращаемся на страницу формы "GET" методом
  $_SESSION["errorMessage"] = "Ошибка! Вы не правильно решили пример!";
  unset($_SESSION['ans']);
unset($_POST['answ']);
}

  
  ?>
