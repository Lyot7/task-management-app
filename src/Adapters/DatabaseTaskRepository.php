<?php
require_once '../Ports/TaskRepositoryInterface.php';

class DatabaseTaskRepository implements TaskRepositoryInterface {
    private $pdo;

    public function __construct($dsn, $username, $password) {
        $this->pdo = new PDO($dsn, $username, $password);
    }

    public function saveTask($task) {
        $stmt = $this->pdo->prepare("INSERT INTO tasks (task) VALUES (:task)");
        $stmt->execute(['task' => $task]);
    }

    public function fetchTasks() {
        $stmt = $this->pdo->query("SELECT * FROM tasks");
        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }

    public function removeTask($taskId) {
        $stmt = $this->pdo->prepare("DELETE FROM tasks WHERE id = :id");
        $stmt->execute(['id' => $taskId]);
    }
}