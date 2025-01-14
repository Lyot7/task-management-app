<?php
interface TaskRepositoryInterface {
    public function saveTask($task);
    public function fetchTasks();
    public function removeTask($taskId);
}
?>