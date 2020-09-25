<?php
include 'config.php';

$sql = 'SELECT name, surname, gender FROM users WHERE login = `'.safeinput($_POST['login']).'`';
foreach ($conn->query($sql) as $row) {
    print 'Your name: '.$row['name'].'<br />';
    print 'Your surname: '.$row['surname'].'<br />';
    print 'Your gender: '.$row['gender'].'<br />';
}

?>
