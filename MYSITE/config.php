<?php

/**
 * Configuration for database connection
 *
 */

$host       = "172.17.0.3";
$username   = "root";
$password   = "test1234$";
$dbname     = "test";
$dsn        = "mysql:host=$host;dbname=$dbname";
$options    = array(
                PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION
	);




?>
