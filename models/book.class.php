<?php
 
class Book extends Table
{
    var $title;
    var $subtitle;
    var $userid;
    var $description;
    var $author;
    var $price;
    var $publisher;
    var $isbn;
    var $cover;
    var $datecreated;
    var $datemodified;
    var $isdeleted;
    var $pages;
    var $views;
    var $category;
    var $numcomments;

    public function __construct()
    {
        $this->tablename = "books";
    }

    public function newbook($title, $subtitle, $userid, $description, $author, $price,
                            $publisher, $isbn, $cover, $pages, $ignore)
    {
        $this->bind(array("title" => $title, "subtitle" => $subtitle, "userid" => $userid,
            "description" => $description, "author" => $author, "price" => $price,
            "publisher" => $publisher, "isbn" => $isbn, "cover" => $cover,
            "pages" => $pages, "category" => $this->category));
    }
}
