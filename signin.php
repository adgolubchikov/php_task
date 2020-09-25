<?php
include 'config.php';

$sql = 'SELECT name, surname, gender FROM users WHERE login = `'.safeinput($_POST['login']).'` AND password= `'.hash(safeinput($_POST['password'])).'`';
$row = $conn->query($sql)->fetch();
if (count($row)==0) {
	echo 'Incorrect login or password or login is not exist.';
}
else {
	echo 'Your name: '.$row['name'].'<br />';
	echo 'Your surname: '.$row['surname'].'<br />';
	echo 'Your gender: '.$row['gender'].'<br />';
}


?>
<br />
<a href="index.html">Sign out</a>
