<?php
namespace PhpLectures;
// User.php
class User {
    public function __construct(
        public string $name
    ) {}

    public function rename(string $newName): void {
        if (strlen($newName) < 3) {
            throw new \InvalidArgumentException("Name too short");
        }
        $this->name = $newName;
    }
}

