<?php

use Alura\Pdo\Domain\Model\Student;

require_once 'vendor/autoload.php';

$databasePath = __DIR__ . '/banco.sqlite';
$pdo = new PDO ('sqlite:' . $databasePath);

$statement = $pdo->query('SELECT * FROM students');
$studentDataList = $statement->fetchAll(PDO::FETCH_ASSOC);
$studentList = [];

foreach ($studentDataList as $stutendData) {
    $studentList[] = new Student(
        $stutendData['id'],
        $stutendData['name'],
        new DateTimeImmutable($stutendData['birth_date'])
    );
}

print_r($studentList);