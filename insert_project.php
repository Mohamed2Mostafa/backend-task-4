<?php

require 'db.php';

$projectName = "Backend Project";
$userId = 1;

$stmt = $pdo->prepare("
INSERT INTO projects(project_name, user_id)
VALUES(?, ?)
");

$stmt->execute([$projectName, $userId]);

echo "Project Inserted Successfully";

?>