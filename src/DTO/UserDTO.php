<?php
namespace PhpLectures\DTO;
class UserDTO {
    public function __construct(
        public int $id,
        public string $name
    ) {}
}
