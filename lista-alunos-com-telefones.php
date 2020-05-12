<?php

use Alura\Pdo\Infrastructure\Persistence\ConnectionCreator;

require_once 'vendor/autoload.php';

$connection = ConnectionCreator::createConnection();
$repository = new \Alura\Pdo\Infrastructure\Repository\PdoStudentRepository($connection);

$studentList = $repository->studentsWithPhones();

print_r($studentList);