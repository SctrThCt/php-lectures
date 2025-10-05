<?php

// UserService.php
class UserService {
    private UserRepository $repo;

    public function __construct(UserRepository $repo) {
        $this->repo = $repo;
    }

    public function getAllUsers(): array {
        $users = $this->repo->findAll();
        return array_map(fn($u) => new UserDTO($u->id, $u->name), $users);
    }

    public function createUser(CreateUserDTO $dto): void {
        $user = new User($dto->name);
        $this->repo->save($user);
    }
}

?>