<?php

/**
 * Configuration for database connection
 *
 */

$host       = "sql";
$username   = "root";
$password   = "example";
$dbname     = "test";
$dsn        = "mysql:host=$host;dbname=$dbname";
$options    = array(
                PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION
	);




?>
