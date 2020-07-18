<?php

require_once "config.php";
require_once "database.php";

$conn = new database(DB_SERVER, DB_USER, DB_PASS, DB_DATABASE);

$link = $conn->connect();
?>