<?php

include "models/table.class.php";
include "models/book.class.php";

function format($data)
{
    $data = trim($data);
    //$data = stripslashes($data);
    $data = addslashes($data);
    $data = htmlspecialchars($data);
    return $data;
}

function load($id)
{
    $book = new Book();
    $book->load($id);

    //check if book exists
    if ($book->title) {
        $book->title = format($book->title);
        $book->subtitle = format($book->subtitle);
        $book->description = format($book->description);
        $book->author = format($book->author);
        $book->publisher = format($book->publisher);
        $book->isdeleted = 1;
        $book->store();
        $json = '{"success": true}';
    } else {
        $json = '{"success": false}';
    }
    echo($json);
}

if (isset($_GET['id'])) {
    load($_GET['id']);
}