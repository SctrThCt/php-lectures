<?php

namespace PhpLectures;
// UserController.php
class UserController {
    private UserService $userService;

    public function __construct(UserService $userService) {
        $this->userService = $userService;
    }

    public function index(): void {
        $users = $this->userService->getAllUsers();
        include 'views/users_list.php';
    }
}
