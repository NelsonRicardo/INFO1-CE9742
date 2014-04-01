<?php

$dbServer = "mysql.wdiclass.com";
$dbName = "wdiclass";
$dbUser = "wdiclass";
$dbPass = "class2013";

function ConnectToDb($server, $user, $pass, $database)
{

	$s = @mysql_connect($server, $user, $pass);
	$d = @mysql_select_db($database, $s);

	if(!$s || !$d)
		return false;
	else
		return $s;
}

function DisconnectFromDb($cxn)
{

	$s = @mysql_close($cxn);

	if(!$s)
		return false;
	else
		return true;
}

?>
