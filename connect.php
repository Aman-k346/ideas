<?php 
$host = 'localhost:3306';
$user = 'root';
$pass = '';
$dbname = 'ideas';
$dbh = new PDO("mysql:host=$host;dbname=$dbname", $user, $pass);
