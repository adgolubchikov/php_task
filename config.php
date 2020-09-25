<?php
$db_server='localhost';
$db_login='login_mysql';
$db_pass='password_for_database';
$db_name='database_name';

$salt='fY5C8kNePlSQ17z';


$dsn = 'mysql:dbname='.$db_name.'testdb;host='.$db_server;


try {
    $conn = new PDO($dsn, $db_login, $db_pass);
} catch (PDOException $e) {
    echo 'Database connection error: ' . $e->getMessage();
}

function safeinput($input) {
	return mysql_real_escape_string(strip_tags($input));
}

function validate() {
	if ($_POST['name']=='') {
		echo 'Name in empty';
		return false;
	}
	if ($_POST['surname']=='') {
		echo 'Surname is empty';
		return false;
	}
	if (strlen($_POST['password'])<8) {
		echo 'Password too short';
		return false;
	}
	if ((strlen($_POST['login'])<6) || (!preg_match('/^[0-9a-zA-Z]+$/', $_POST['login']))) {
		echo 'Login too short or contains unsupported chars';
		return false;
	}
	
	return true;
}

function hash($pass) {
	return md5(md5($pass).$salt);
}

?>
