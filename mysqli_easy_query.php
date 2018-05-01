<?php
define('DBHost', ''); // your db host
define('DBName', ''); // the db name
define('DBUser', ''); // your db username
define('DBPassword', ''); // your db password

function request($req)
{
	$mysqli = new mysqli("localhost", DBUser, DBPassword);
	$mysqli->select_db(DBName);
	$result = $mysqli->query($req);

	if(!is_bool($result)) $result = mysqli_fetch_all($result, MYSQLI_ASSOC);
	//$result = $result->fetch_assoc();
	$mysqli->close();
	return $result;
}