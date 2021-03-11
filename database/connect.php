<?php

require_once __DIR__ . "/setup.php";

global $settings;

function connect()
{
    $servername = $GLOBALS['settings']->host;
    $username = $GLOBALS['settings']->user;
    $password = $GLOBALS['settings']->password;
    $dbname = $GLOBALS['settings']->database;

    try {
        $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
        $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        return $conn;
    } catch
    (PDOException $e) {
        echo "Connection failed: " . $e->getMessage();
    }
    return null;
}
?>