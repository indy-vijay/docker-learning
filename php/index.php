<?php
$user = "user";
$pass = "1234";
$dbh = new PDO('mysql:host=172.19.0.2;dbname=test_db', $user, $pass);
// use the connection here
$sth = $dbh->query('SELECT * FROM users');
print_r($sth->fetch());

var_dump($dbh);
