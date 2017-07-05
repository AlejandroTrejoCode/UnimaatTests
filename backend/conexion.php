<<?php
$username = 'root';
$password = '';
$connection = new PDO(
    'mysql:host=localhost;dbname=escuela_pr',
    $username,
    $password
);

$connection->setAttribute(
    PDO::ATTR_ERRMODE,
    PDO::ERRMODE_EXCEPTION
);
 ?>
