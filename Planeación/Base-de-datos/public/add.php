<?php

require '../src/Connection.php';
require '../src/config.php';

use join\assamble;

$db = new assamble($host, $user, $pass, $database, $port);
$sql = "INSERT INTO user (name, surname, cellphone) VALUES ('{$_POST['name']}', '{$_POST['surname']}', '{$_POST['cellphone']}')";
$db->execute($sql);

header('Location: index.php');