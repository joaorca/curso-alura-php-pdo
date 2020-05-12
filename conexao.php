<?php

$caminhoBanco = __DIR__ . '/banco.sqlite';
$pdo = new PDO ('sqlite:' . $caminhoBanco);

echo "conectei";

$createTableSql = '
    CREATE TABLE IF NOT EXISTS students (
        id INTEGER PRIMARY KEY, 
        name TEXT, 
        birth_date TEXT
    );
    
    CREATE TABLE IF NOT EXISTS phones (
        id INTEGER PRIMARY KEY,
        area_code TEXT,
        number TExT,
        student_id INTEGER,
        FOREIGN KEY (student_id) REFERENCES students(id)
    );   
';

$pdo->exec($createTableSql);


$pdo->exec("INSERT INTO phones (area_code, number, student_id) VALUES ('24','22222222',1), ('21','99999999', 1)");