<?php
include_once './Database.php';
try
{
    $conn = new Database();
    $connection = $conn->getConnection();
    $sql = file_get_contents("data/database.sql");
    $connection->exec($sql);
    echo "Database and tables created successfully!";
}
catch(PDOException $e)
{
    echo $e->getMessage();
}