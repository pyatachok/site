
<?php
// index.php



// Загружаем и инициализируем глобальные библиотеки
require_once './../inc/config.php';
require_once ROOT_DIR . '/inc/model.php';
require_once ROOT_DIR . '/controllers/company.php';

// Внутренняя маршрутизация
$uri = $_SERVER['PHP_SELF'];


if ($uri == '/index.php') {
    list_action();
} elseif ($uri == '/index.php/company/list') {
    company_list_action();
} elseif ($uri == '/index.php/company/show' && isset($_GET['id'])) {
    company_show_action($_GET['id']);
} else {
    header('Status: 404 Not Found');
    echo '<html><body><h1>Page Not Found</h1></body></html>';
}