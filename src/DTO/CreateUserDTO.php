<?php

namespace PhpLectures\DTO;

class CreateUserDTO {
    public function __construct(
        public string $name
    ) {}
}
