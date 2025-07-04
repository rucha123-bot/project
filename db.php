<?php
$dsn = 'sqlite:users.db';
try {
    $db = new PDO($dsn);
} catch (PDOException $e) {
    echo "Connection failed: " . $e->getMessage();
}
?>
