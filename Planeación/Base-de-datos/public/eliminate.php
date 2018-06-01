<?php

require '../src/Connection.php';
require '../src/config.php';

use join\assamble;

$db = new assamble($host, $user, $pass, $database, $port);
$sql = "DELETE FROM users WHERE id = {$_GET['id']}";
$db->execute($sql);

header('Location: index.php');