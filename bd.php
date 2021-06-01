<?php
  $mysqli = new mysqli("localhost", "root", "", "test");
  mysqli_set_charset($mysqli, "SET NAMES 'utf8'");
  $result_set = $mysqli->query("SELECT * FROM `users`"); 
?>