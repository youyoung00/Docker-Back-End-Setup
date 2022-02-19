<?php
$mysql_hostname = 'host.docker.internal';
$mysql_username = 'you889';
$mysql_password = 'semin';
$mysql_database = 'shinDB';
$mysql_port = '53000';
$mysql_charset = 'UTF8';

$conn = new mysqli($mysql_hostname, $mysql_username, $mysql_password, $mysql_database, $mysql_port, $mysql_charset);

if($conn->connect_error){
    die("연결 실패 : " . $conn->connect_error);
} 
echo "Connected successfully ! <br><br>";
?>