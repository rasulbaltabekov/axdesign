
<?php include('bd.php')
?>
<?php
session_start(); 





$name = $_POST['username'];
$email = $_POST['useremail'];
$question = $_POST['question'];
$ququ = $_POST['ququ'];
$vybor = $_POST['vybor'];
$token = "1555165918:AAH6vhGPo-qQISnJkFUpE3lu78WC5PT9N-Y";
$chat_id = "-581566487";
$txt = null;
$sendToTelegram = null;
$arr = array(
  'Имя пользователя: ' => $name,
  'Email: ' => $email,
  'Цена:' => $question,
  'Пожелание пользователя:' => $ququ,
  'Стилистика' => $vybor

  

);


$mysqli->query("INSERT INTO `zakaz` (`name`, `email`, `cena`, `comm`, `vybor`, `userlog`) VALUES ('$name', '$email', '$question', '$ququ', '$vybor', '".$_SESSION['user_login']."')");// Добавляем комментарий в таблицу
foreach($arr as $key => $value) {
  $txt.= "<b>".$key."</b> ".$value."%0A";
};

if (is_numeric($_POST['answ'])) //проверяем число ли, если не делать то 0+0='' будет истинно
{
  if ((intval($_POST['answ']))===(intval($_SESSION['ans']))) //проверяем эквивалентностью опять же из-за возможного нуля в ответе
  {
  
    $sendToTelegram = fopen("https://api.telegram.org/bot{$token}/sendMessage?chat_id={$chat_id}&parse_mode=html&text={$txt}","r");
    header("Location: form.php"); //возвращаемся на страницу формы "GET" методом
    $_SESSION["successMessage"] = "Спасибо за обращение, в ближайшее время с вами свяжутся!";

  }
  else 
  {
    header("Location: form.php"); //возвращаемся на страницу формы "GET" методом
    $_SESSION["errorMessage"] = "Ошибка! Вы не правильно решили пример!";
    unset($_SESSION['ans']);
    unset($_POST['answ']);

  }
}
else
{
  header("Location: form.php"); //возвращаемся на страницу формы "GET" методом
  $_SESSION["errorMessage"] = "Ошибка! Вы не правильно решили пример!";
  unset($_SESSION['ans']);
unset($_POST['answ']);
}


if ($sendToTelegram) {
  
  header("Location: form.php"); //возвращаемся на страницу формы "GET" методом
  $_SESSION["successMessage"] = "Спасибо за обращение, в ближайшее время с вами свяжутся!";
} 


?>

