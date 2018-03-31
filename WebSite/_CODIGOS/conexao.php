<?php
session_start();
$host = 'noarteclg.mysql.uhserver.com';
$user = 'nooarteclg';
$pass = 'lucasgabriel548@';
$db   = 'noarteclg';

$con = mysqli_connect($host, $user, $pass, $db);

mysqli_set_charset('utf8');

if($mysqli->connect_errno)
  echo "Falha na conexão: (".$mysqli->connect_errno.") ".$mysqli->connect_error;

?>
