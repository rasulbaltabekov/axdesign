<?php
session_start();
$users = require_once 'users.php';
?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Список пользователей</title>
</head>
<body>
<?php

if (empty($_SESSION['user']) || $_SESSION['user']['is_admin'] != 1) {
    echo 'У вас не хватает прав';
    die;
} ?>

<table>
    <tr>
        <th>Имя</th>
        <th>Логин</th>
    </tr>
    <?php foreach ($users as $user): ?>
    <tr>
        <td><?= $user['name'] ?></td>
        <td><?= $user['login'] ?></td>
    </tr>
    <?php endforeach; ?>
</table>
</body>
</html>