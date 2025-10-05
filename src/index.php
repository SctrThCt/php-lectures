<?php
require_once __DIR__.'/vendor/autoload.php';
// index.php
$controller = new UserController(
    new UserService(
        new UserRepository($pdo)));
$controller->index();

?>