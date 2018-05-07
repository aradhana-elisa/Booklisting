<?php
/**
 * Created by PhpStorm.
 * User: Sif
 * Date: 11/19/2017
 * Time: 4:15 PM
 */

define('DB_SERVER', 'localhost');
define('DB_USER', 'root');
define('DB_PASS', '');
define('DB_NAME', 'book_listing');

class Database
{
    private $connection;
    private $numrows;

    public function __construct()
    {
        $this->connection = mysqli_connect(DB_SERVER, DB_USER, DB_PASS, DB_NAME);
        if ($this->connection->connect_error) {
            die("<br>Connection failed: " . $this->connection->connect_error . "<br>");
        }
        //echo "<br>Connected successfully<br>";
    }

    public function __destruct()
    {
        $this->connection->close();
        //echo "<br>Destroy connection <br>";
    }

    public function getNumrows()
    {
        return $this->numrows;
    }

    public function runQuery($query)
    {
        if ($this->connection->query($query) === TRUE) {
            echo "Query executed successfully<br>";
        } else {
            echo "Error executing query: " . $this->connection->error . "<br>";
        }
    }

    public function getQuery($query)
    {
        $results = mysqli_query($this->connection, $query);
        $this->numrows = $results->num_rows;
        return mysqli_fetch_assoc($results);
    }

    public function setQuery($query)
    {
        return mysqli_query($this->connection, $query);
    }
}