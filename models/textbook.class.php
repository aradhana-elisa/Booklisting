<?php
/**
 * Created by PhpStorm.
 * User: Sif
 * Date: 11/23/2017
 * Time: 8:02 PM
 */

class Textbook extends Book
{
    var $course;

    public function __construct()
    {
        $this->category = "Textbook";
        parent::__construct();
    }

    public function newbook($title, $subtitle, $userid, $description, $author, $price,
                            $publisher, $isbn, $cover, $pages, $course)
    {
        $this->bind(array("title" => $title, "subtitle" => $subtitle, "userid" => $userid,
            "description" => $description, "author" => $author, "price" => $price,
            "publisher" => $publisher, "isbn" => $isbn, "cover" => $cover,
             "pages" => $pages, "category" => $this->category, "course" => $course));
    }
}