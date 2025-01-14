<?php

require_once '../Ports/TaskRepositoryInterface.php';

class TaskManager {
    private $taskRepository;

    public function __construct($taskRepository) {
        $this->taskRepository = $taskRepository;
    }

    public function addTask($task) {
        $this->taskRepository->saveTask($task);
    }

    public function getTasks() {
        return $this->taskRepository->fetchTasks();
    }

    public function removeTask($taskId) {
        // Logic to remove a task by its ID
        // This method should be implemented in the repository
    }
}
