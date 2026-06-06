<?php

require 'db.php';

$userId = 1;

$stmt = $pdo->prepare("
SELECT
    p.project_name,
    t.task_name,
    t.priority,
    t.status

FROM projects p

LEFT JOIN tasks t
ON p.project_id = t.project_id

WHERE p.user_id = ?
");

$stmt->execute([$userId]);

$rows = $stmt->fetchAll(PDO::FETCH_ASSOC);

echo "<h2>User Projects and Tasks</h2>";

foreach($rows as $row){
    echo "Project: " . $row['project_name'] . "<br>";
    echo "Task: " . $row['task_name'] . "<br>";
    echo "Priority: " . $row['priority'] . "<br>";
    echo "Status: " . $row['status'] . "<br>";
    echo "<hr>";
}

?>