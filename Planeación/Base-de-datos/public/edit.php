<?php

require '../src/Connection.php';
require '../src/config.php';

use join\assamble;

$db = new assamble($host, $user, $pass, $database, $port);
$sql = "SELECT id, name, surname, cellphone FROM user WHERE id = {$_GET['id']}";
$db->query($sql);
$user = $db->getData();

require './fedit.php';