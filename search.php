<?php

include "models/table.class.php";
include "models/book.class.php";

function load($limit, $text)
{
    $tablename = "books";
    $text = "'%" . $text . "%'";
    $database = new Database;
    $query = "SELECT * FROM {$tablename} WHERE title LIKE {$text} LIMIT {$limit}";
    //echo $query;
    $json = '{"books":[';
    $results = $database->setQuery($query);
    while ($row = $results->fetch_array()) {
        $book = new Book();
        $book->bind($row);
        //array_push($json, $book);
        $json .= json_encode(get_object_vars($book)) . ",";
    }
    $json = rtrim($json, ",");
    $json .= ']}';
    echo($json);
}

if (isset($_GET['query'])) {
    load(10, $_GET['query']);
}