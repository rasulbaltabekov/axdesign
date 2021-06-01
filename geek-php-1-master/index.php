<?php
session_start();

if (empty($_SESSION['user'])) {
    header('Location: login.php');
}

?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Админ панель</title>
</head>
<body>
<ul>
    <li><?= 'Welcome, ' . $_SESSION['user']['name']; ?></li>
    <li><a href="logout.php" >Выход</a></li>
    <li><a href="user_list.php" >Список пользователей</a></li>
</ul>
</body>
</html>