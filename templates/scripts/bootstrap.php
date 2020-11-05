<?php

# De bootstrap. Zet alles in gang

session_start();

require __DIR__ . '/../vendor/autoload.php';

include_once __DIR__ . '/global_functions.php';

// Load DotEnv
$dotenv = Dotenv\Dotenv::create(__DIR__ . '/../');
$dotenv->load();


// Twig
$loader = new \Twig\Loader\FilesystemLoader(__DIR__ . '/../templates');
// $twig = new \Twig\Environment($loader, [
//     'cache' => '/path/to/compilation_cache',
// ]);
$twig = new \Twig\Environment($loader);



// Fire up Database connection
try {
    $host = $_ENV['DB_HOST'];
    $schema = $_ENV['DB_SCHEMA'];
    $user = $_ENV['DB_USER'];
    $password = $_ENV['DB_PASSWORD'];
    $conn = new PDO("mysql:host=$host;dbname=$schema", $user, $password);
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (Exception $e) {
    die($e->getMessage());
}
