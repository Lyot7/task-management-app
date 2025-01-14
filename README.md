# Task Management Application

Ce projet a pour objectif de faire passer une mini-app d'une **architecture monolythique** à une **architecture hexagonale** depuis ce fichier :

```
<?php
$tasks = [];
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
 $tasks[] = $_POST['task'];
}
?>
<!DOCTYPE html>
<html>
<head>
 <title>Tasks</title>
</head>
<body>
 <h1>Task List</h1>
 <form method="POST">
 <input type="text" name="task" required>
 <button type="submit">Add Task</button>
 </form>
 <ul>
 <?php foreach ($tasks as $task) : ?>
 <li><?= htmlspecialchars($task) ?></li>
 <?php endforeach; ?>
 </ul>
</body>
</html>
```
