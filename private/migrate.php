<?php

require_once('src/mysqlConnect.php');
require_once('private/execute.php');

$createTables = file_get_contents("private/create_tables.sql");
$seedTables = file_get_contents("private/seed_tables.sql");

if (executeQuery($conn->multi_query($createTables) === TRUE)) {
    echo 'Tables created successfully';
} else {
    echo $conn->error;
}
echo PHP_EOL;
if (executeQuery($conn->multi_query($seedTables))) {
    echo 'Tables seeded successfully';
} else {
    echo $conn->error;
}

echo PHP_EOL;



$conn->close();