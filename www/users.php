<?php
require 'db.php';

$stmt = $pdo->query("SELECT * FROM users");
$users = $stmt->fetchAll(PDO::FETCH_ASSOC);
?>

<!DOCTYPE html>
<html>
<head>
  <title>Users List</title>
</head>
<body>
  <h1>Users</h1>
  <ul>
    <?php foreach ($users as $user): ?>
      <li><?= htmlspecialchars($user['name']) ?> (<?= htmlspecialchars($user['email']) ?>)</li>
    <?php endforeach; ?>
  </ul>
</body>
</html>