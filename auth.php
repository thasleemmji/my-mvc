<?php
session_start();

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $name = isset($_POST['name']) ? trim($_POST['name']) : '';
    if (!empty($name)) {
        $_SESSION['name'] = $name;
    }
} elseif ($_SERVER['REQUEST_METHOD'] === 'GET' && !empty($_GET['logout'])) {
    session_destroy();
}

header('Location: home.php');
exit();
