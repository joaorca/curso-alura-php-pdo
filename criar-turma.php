<?php

use Alura\Pdo\Domain\Model\Student;
use Alura\Pdo\Infrastructure\Persistence\ConnectionCreator;
use Alura\Pdo\Infrastructure\Repository\PdoStudentRepository;

require_once 'vendor/autoload.php';

$connection = ConnectionCreator::createConnection();
$studentRepository = new PdoStudentRepository($connection);

$connection->beginTransaction();
try {
    $aStudent = new Student(
        null,
        'Nico Steppat',
        new DateTimeImmutable('1985-05-01')
    );
    $studentRepository->save($aStudent);

    $bStudent = new Student(
        null,
        'Sergio Lopes',
        new DateTimeImmutable('1985-05-01')
    );
    $studentRepository->save($bStudent);

    $connection->commit();
} catch (\PDOException $e){
    echo $e->getMessage();
    $connection->rollBack();
}
