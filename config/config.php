<?php
define('URL', 'http://localhost:8081/crudphpmvcestadia/');
define('HOST', 'localhost');
define('DB', 'estructuramvc');
define('USER', 'root');
define('PASSWORD', '');
define('CHARSET', 'utf8mb4');

try {
    $dsn = "mysql:host=" . HOST . ";dbname=" . DB . ";charset=" . CHARSET;
    $pdo = new PDO($dsn, USER, PASSWORD);
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (PDOException $e) {
    die("Error de conexión: " . $e->getMessage());
}
?>

