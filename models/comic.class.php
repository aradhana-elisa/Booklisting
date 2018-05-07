<?php
/**
 * Created by PhpStorm.
 * User: Sif
 * Date: 11/23/2017
 * Time: 8:02 PM
 */

class Comic extends Book
{
    var $type;

    public function __construct()
    {
        $this->category = "Comic";
        parent::__construct();
    }

    public function newbook($title, $subtitle, $userid, $description, $author, $price,
                            $publisher, $isbn, $cover, $pages, $type)
    {
        $this->bind(array("title" => $title, "subtitle" => $subtitle, "userid" => $userid,
            "description" => $description, "author" => $author, "price" => $price,
            "publisher" => $publisher, "isbn" => $isbn, "cover" => $cover,
            "pages" => $pages, "category" => $this->category, "type" => $type));
    }
}