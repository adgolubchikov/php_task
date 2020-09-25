<?php
include 'config.php';

if (validate()) {
	$sql = 'SELECT name, surname, gender FROM users WHERE login = `'.safeinput($_POST['login']).'`';
	$row = $conn->query($sql)->fetch();
	if (count($row)==1) {
		echo 'User '.$_POST['login'].' already exists.';
	}
	else {
		$sql = 'INSERT INTO users (login, password, name, surname, gender) VALUES (`'.safeinput($_POST['login']).'`, `'.hash(safeinput($_POST['password'])).'`, `'.safeinput($_POST['name']).'`, `'.safeinput($_POST['surname']).'`, `'.safeinput($_POST['gender']).'`)';
		$conn->query($sql);
		
		echo 'User '.$_POST['login'].' successfully registered.';
	}
}
?>
<br />
<a href="index.html">Back</a>
