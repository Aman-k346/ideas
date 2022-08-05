<?php 
try{
$host = 'localhost:3306';
$user = 'root';
$pass = '';
$dbh = new PDO("mysql:host=$host;dbname=test", $user, $pass);
echo 'success';}
catch (PDOException $e) {
    print "Error!: " . $e->getMessage() . "<br/>";
    die();
}
?>