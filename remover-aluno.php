<?php

use Alura\Pdo\Domain\Model\Student;

require_once 'vendor/autoload.php';

$databasePath = __DIR__ . '/banco.sqlite';
$pdo = new PDO ('sqlite:' . $databasePath);

$sqlDelete = 'DELETE FROM students WHERE id = ?';
$statement = $pdo->prepare($sqlDelete);
$statement->bindValue(1, 4, PDO::PARAM_INT);
var_dump($statement->execute());