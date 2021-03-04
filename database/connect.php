<?php

require_once(dirname(__FILE__) . "/setup.php");

global $settings;
/*$db = mysql_connect($settings->host, $settings->user, $settings->password) or die("Could not connect: " . mysql_error());
mysql_select_db($settings->database, $db) or die("Could not select database.");*/

$servername = $settings->host;
$username = $settings->user;
$password = $settings->password;
$dbname = $settings->database;

try {
    $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
    // set the PDO error mode to exception
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    return $conn;
} catch
(PDOException $e) {
    echo "Connection failed: " . $e->getMessage();
}
return null;


?>