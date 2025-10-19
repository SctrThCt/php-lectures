<?php

namespace App\Controller;

use App\Model\Task;
use App\Repository\TaskRepositoryInterface;

class TaskController {

    private TaskRepositoryInterface $repository;
    private array $tasks;

    public function __construct(TaskRepositoryInterface $repository){
        $this->repository = $repository;
    }

    public function list() {
        require __DIR__ . '/../View/task_list.php';
    }

    public function add(){
        echo "Форма добавления задачи";
    }

    public function getTasks()  {
        return $this->repository->findAll();
    }
}