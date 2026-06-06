<?php

require 'db.php';

$taskName = "Create Login Page";
$description = "Design and implement login page";
$startDate = "2026-06-06";
$endDate = "2026-06-10";
$priority = "High";
$category = "Bug";
$status = "To Do";

$projectId = 1;

$stmt = $pdo->prepare("
INSERT INTO tasks(
    task_name,
    description,
    start_date,
    end_date,
    priority,
    category,
    status,
    project_id
)
VALUES(
    ?,?,?,?,?,?,?,?
)
");

$stmt->execute([
    $taskName,
    $description,
    $startDate,
    $endDate,
    $priority,
    $category,
    $status,
    $projectId
]);

echo "Task Inserted Successfully";

?>