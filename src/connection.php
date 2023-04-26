<?php

// connect to db
try
{
    $db = new \PDO('mysql:dbname=Sql1246831_5;host=89.46.111.72;charset=utf8mb4', 'Sql1246831', '17s62u8p68');
}
catch (PDOException $e)
{
    $connection_error = 1;
    header("Content-type: application/json");
    $responses = array('message' => 'Connessione fallita: ' . $e->getMessage(), http_response_code(500));
    echo json_encode($responses);
    return 1;
}
