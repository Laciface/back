<?php
class DBConnection
{
    public static function connectToDatabase(): ?PDO
    {
        $servername = "localhost";
        $username = "root";
        $password = "passwordsql";

        try {
            $conn = new PDO("mysql:host=$servername;dbname=back-to-the-future", $username, $password);
            // set the PDO error mode to exception
            $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            return $conn;
        } catch
        (PDOException $e) {
            echo "Connection failed: " . $e->getMessage();
        }
    }
}
?>