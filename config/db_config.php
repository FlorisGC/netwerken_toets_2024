<?php

$dbhost = 'localhost';
$dbuser = 'net24fhalleriet_gebruiker51';
$dbpass = 'XD7YFXxesJ+y';
$dbname = 'net24fhalleriet_netwerken_toets_2024';

$conn = new mysqli($dbhost, $dbuser, $dbpass, $dbname);
if ($conn->connect_error) {
	die('Failed Connect ! ' . $conn->connect_error);
}