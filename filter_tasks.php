<?php

require 'db.php';

$userId = 1;
$priority = "High";

$stmt = $pdo->prepare("
SELECT
    t.task_name,
    t.priority,
    t.status

FROM tasks t

INNER JOIN projects p
ON t.project_id = p.project_id

WHERE
p.user_id = ?
AND t.priority = ?
AND t.archived = 0
");

$stmt->execute([
    $userId,
    $priority
]);

$tasks = $stmt->fetchAll(PDO::FETCH_ASSOC);

echo "<h2>Filtered Tasks</h2>";

foreach($tasks as $task){
    echo "Task: " . $task['task_name'] . "<br>";
    echo "Priority: " . $task['priority'] . "<br>";
    echo "Status: " . $task['status'] . "<br>";
    echo "<hr>";
}

?>