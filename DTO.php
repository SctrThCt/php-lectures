<?php

class UserDTO {
    public function __construct(
        public int $id,
        public string $name
    ) {}
}

class CreateUserDTO {
    public function __construct(
        public string $name
    ) {}
}


?>
