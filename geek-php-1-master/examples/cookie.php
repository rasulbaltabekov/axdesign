<?php
if (empty($_COOKIE['myCookie1'])) {
    // Команда установки куки
    setcookie('myCookie1', json_encode(['a', 'b']), time() + 3600);
} else {
    // Команда считывания куки из запроса
    echo $_COOKIE['myCookie'];
}