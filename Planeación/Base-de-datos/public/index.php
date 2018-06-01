<?php 
require '../src/Connection.php';

use join\assamble;

$host='localhost';
$user='root';
$pass='';
$database='crud';
$port=3306;

$db = new assamble($host, $user, $pass, $database, $port);
$sql = 'SELECT id, name, surname, cellphone, FROM users';
$db->query($sql);
require './table.php';
        
?>
