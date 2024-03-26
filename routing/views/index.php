<?php require_once "menu.php" ?>
<?php
$request = $_SERVER['REQUEST_URI'];

switch ($request) {
    case '/' :
        require '/views/contact.php';
        break;
    case '' :
        require '/views/servise.php';
        break;
    case '/about' :
        require  '/views/about.php';
        break;
    default:
        http_response_code(404);
        require  '/views/404.php';
        break;
}