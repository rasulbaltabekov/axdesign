<?php
session_start();

if (!empty($_SESSION['is_admin'])) {
    echo 'Вы админ';
} else {

    echo 'Вы гость';
}

echo session_save_path();