<?php
$user = "user";
$pass = "1234";
$dbh = new PDO('mysql:host=db;dbname=test_db', $user, $pass);
// use the connection here
$sth = $dbh->query('SELECT * FROM users');
print_r($sth->fetchAll());

var_dump($dbh);
