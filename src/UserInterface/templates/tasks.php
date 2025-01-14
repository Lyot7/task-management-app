<!DOCTYPE html>
<html>
<head>
    <title>Task List</title>
</head>
<body>
    <h1>Task List</h1>
    <form method="POST" action="index.php">
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