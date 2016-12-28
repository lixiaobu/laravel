<?php 
phpinfo();
//$pdo = new PDO('mysql:host=localhost;dbname=user;port=3306','root','web!@#');
$mysqli = mysqli_init();
$mysqli->real_connect('localhost', 'root', 'web!@#', 'mysql');
var_dump($mysqli); 
