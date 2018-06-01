<?php

require '../src/connection.php';
require '../src/config.php';

use join\assamble;

$db = new assamble($host, $user, $pass, $database, $port);
$sql = "UPDATE users SET name = '{$_POST['name']}', 
surname = '{$_POST['surname']}',
cellphone = '{$_POST['cellphone']}' WHERE id = {$_POST['id']}";
$db->execute($sql);

header('Location: index.php');