<?php

require_once '../Ports/TaskRepositoryInterface.php';

class FileTaskRepository implements TaskRepositoryInterface {
    private $filePath;

    public function __construct($filePath) {
        $this->filePath = $filePath;
    }

    public function saveTask($task) {
        $tasks = $this->fetchTasks();
        $tasks[] = $task;
        file_put_contents($this->filePath, serialize($tasks));
    }

    public function fetchTasks() {
        if (!file_exists($this->filePath)) {
            return [];
        }
        return unserialize(file_get_contents($this->filePath));
    }

    public function removeTask($taskId) {
        $tasks = $this->fetchTasks();
        foreach ($tasks as $key => $task) {
            if ($task['id'] == $taskId) {
                unset($tasks[$key]);
                break;
            }
        }
        file_put_contents($this->filePath, serialize($tasks));
    }
}