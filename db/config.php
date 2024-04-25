<?php

$dHost = 'localhost';
$dUsr = 'root';
$dPsw = 'mysql';
$dName = 'library';
$conn = new mysqli($dHost, $dUsr, $dPsw, $dName); //объект класса
if ($conn->connect_error) die('Ошибка соединения с базой данных');

?>