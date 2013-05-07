
<?php
// index.php

error_reporting(E_ALL);
ini_set('display_errors', true);

// Загружаем и инициализируем глобальные библиотеки
require_once './../inc/model.php';
require_once './../inc/controllers.php';

// Внутренняя маршрутизация
$uri = $_SERVER['REQUEST_URI'];
if ($uri == '/index.php') {
    list_action();
} elseif ($uri == '/index.php/show' && isset($_GET['id'])) {
    show_action($_GET['id']);
} else {
    header('Status: 404 Not Found');
    echo '<html><body><h1>Page Not Found</h1></body></html>';
}