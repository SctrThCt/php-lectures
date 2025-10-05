<?php

// index.php
$controller = new UserController(
    new UserService(
        new UserRepository($pdo)));
$controller->index();

?>