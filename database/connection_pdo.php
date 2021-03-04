<?php

/*require_once(dirname(__FILE__) . "/setup.php");*/

class DBConnection
{
    public static function connectToDatabase(): ?PDO
    {
        $servername = "localhost";
        $username = "root";
        $password = "passwordsql";
        $dbname = "back-to-the-future";

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
    }

    public static function closeConnection(&$conn) {
        $conn=null;
    }
}

DBConnection::connectToDatabase()
?>