<?php   
$name = $_POST["url"];
  $id= $_POST["id"];
  $name = htmlspecialchars($name);
  $mysqli = new mysqli("localhost", "root", "", "test");
  $mysqli-> query("UPDATE `carousel` SET `url`='".$_POST['url']."', WHERE `id`= '" . $_POST['id'] . "'");
  // $mysqli->query ("UPDATE `lending` SET (`url`, `name`, `time`) VALUES ('$name', '$page_id', '$text_comment') WHERE id='.$_POST["id"].' ");
  header("Location: ".$_SERVER["HTTP_REFERER"]);
  ?>
