<?php

declare(strict_types=1);

// DB credentials
(string) $hostname = '127.0.0.1';
(string) $username = 'root';
(string) $password = 'root';
(string) $dbname = 'toma_db_killer';

// connect to DB
$connectionToDB = new mysqli($hostname, $username, $password, $dbname);

// Check connection
if ($connectionToDB->connect_error) die('Error with DB connection');
