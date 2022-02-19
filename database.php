<?php

session_start();

include('env.php');

$db = new mysqli($host,$dbuser,$dbpass,$dbname);

if ($db->connect_error) {
    die("Connection failed: " . $db->connect_error);
}