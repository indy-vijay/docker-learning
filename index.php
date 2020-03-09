<?php
$user = "root";
$pass = "1234";
$dbh = new PDO('mysql:host=172.17.0.2;dbname=sys', $user, $pass);
// use the connection here
$sth = $dbh->query('SELECT * FROM users');
print_r($sth->fetch());

?>
