<?php
session_start();
$users = require_once 'users.php';

if (!empty($_SESSION['user'])) {
    header('Location: index.php');
}

$errors = [];
if (!empty($_POST['login']) && !empty($_POST['password'])) {
    foreach ($users as $user) {
        if ($user['login'] == $_POST['login'] && $_POST['password'] == $user['password']) {
            $_SESSION['user'] = $user;
            header('Location: index.php');
            die;
        }
    }
    $errors[] = 'Неверный логин или пароль';
}
?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Вход</title>
</head>
<body>

<ul>
    <?php foreach ($errors as $error): ?>
        <li><?= $error ?></li>
    <?php endforeach; ?>
</ul>

<form method="POST">
    <div>
        <label for="login">Логин</label>
        <input id="login" name="login">
    </div>
    <div>
        <label for="password">Пароль</label>
        <input id="password" name="password">
    </div>
    <div>
        <button type="submit">Вход</button>
    </div>
</form>
</body>
</html>