<?php   
$name = $_POST["url"];
  $page_id = $_POST["nazv"];
  $id= $_POST["id"];
  $text_comment = $_POST["time"];
  $name = htmlspecialchars($name);
  $text_comment = htmlspecialchars($text_comment);
  $mysqli = new mysqli("localhost", "root", "", "test");
  $mysqli-> query("UPDATE `lending` SET `url`='".$_POST['url']."', `name`='".$_POST['nazv']."', `time`='".$_POST['time']."' WHERE `id`= '" . $_POST['id'] . "'");
  // $mysqli->query ("UPDATE `lending` SET (`url`, `name`, `time`) VALUES ('$name', '$page_id', '$text_comment') WHERE id='.$_POST["id"].' ");
  header("Location: ".$_SERVER["HTTP_REFERER"]);
  ?>
