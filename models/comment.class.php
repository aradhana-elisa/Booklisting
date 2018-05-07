<?php
/**
 * Created by PhpStorm.
 * User: Sif
 * Date: 11/24/2017
 * Time: 3:47 PM
 */

class Comment extends Table
{
    var $userid;
    var $bookid;
    var $datecreated;
    var $comment;

    public function __construct()
    {
        $this->tablename = "comments";
    }

    public function newcomment($userid, $bookid, $comment)
    {
        $this->bind(array("userid" => $userid, "bookid" => $bookid, "comment" => $comment));
    }
}
