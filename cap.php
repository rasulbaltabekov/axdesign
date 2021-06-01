<?php
session_start(); 
if (is_numeric($_GET['answ'])) //проверяем число ли, если не делать то 0+0='' будет истинно
{
if ((intval($_GET['answ']))===(intval($_SESSION['ans']))) //проверяем эквивалентностью опять же из-за возможного нуля в ответе
{
  

  header("Location: comments.php"); //возвращаемся на страницу формы "GET" методом
  $_SESSION["successMessage"] = "Спасибо за обращение, в ближайшее время с вами свяжутся!";

}
else 
{
  header("Location: comments.php"); //возвращаемся на страницу формы "GET" методом
  $_SESSION["errorMessage"] = "Ошибка! Вы не правильно решили пример!";
  unset($_SESSION['ans']);
  unset($_GET['answ']);

}
}
else
{
header("Location: comments.php"); //возвращаемся на страницу формы "GET" методом
$_SESSION["errorMessage"] = "Ошибка! Вы не правильно решили пример!";
unset($_SESSION['ans']);
unset($_GET['answ']);
}


?>

?>