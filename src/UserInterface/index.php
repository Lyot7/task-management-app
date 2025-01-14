<?php
require_once '../Domain/TaskManager.php';
require_once '../Adapters/FileTaskRepository.php';

$taskRepository = new FileTaskRepository('tasks.json');
$taskManager = new TaskManager($taskRepository);

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $taskManager->addTask($_POST['task']);
}

$tasks = $taskManager->getTasks();
include 'templates/tasks.php';
?>