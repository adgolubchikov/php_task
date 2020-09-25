<?php
include 'config.php';

$sql = 'CREATE TABLE users (login VARCHAR(100), password VARCHAR(100), name VARCHAR(100), surname VARCHAR(100), gender VARCHAR(100)); ';
$conn->query($sql);
?>
