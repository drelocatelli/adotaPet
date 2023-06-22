<?php

$conn = new mysqli("localhost", "root", "123456", "adotapet");
if ($mysqli->connect_errno) {
    echo "Failed to connect to MySQL: " . $mysqli->connect_error;
    exit();
}