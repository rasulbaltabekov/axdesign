<?php include('../bd.php')
?>
<?php   
$name = $_POST["url"];
  $id= $_POST["id"];


  $mysqli-> query("UPDATE `carousel` SET `url`='".$_POST['url']."', WHERE `id`= '" . $_POST['id'] . "'");
  // $mysqli->query ("UPDATE `lending` SET (`url`, `name`, `time`) VALUES ('$name', '$page_id', '$text_comment') WHERE id='.$_POST["id"].' ");
  header("location: admin.php");
  ?>
