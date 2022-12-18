<?php 

$db = new PDO('mysql:dbhost=localhost;dbname=project', 'root', '', [
    PDO::ATTR_ERRMODE => PDO::ERRMODE_WARNING,
    PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_OBJ,
]);

$query = "INSERT INTO roles (name, value) VALUES (:name, :value)";
$statement = $db->prepare($query);

$statement->execute(
    [
        ':name' => 'baby',
        ':value' => '999'
    ]
);

echo $db->lastInsertId();