<?php
/**
 * Created by PhpStorm.
 * User: Sif
 * Date: 11/19/2017
 * Time: 6:14 PM
 */

require "config.inc.php";

class Table
{
    protected $tablename = NULL;
    public $id = NULL;

    public function __construct()
    {
    }

    public function bind($data)
    {
        //Warning: Invalid argument supplied for foreach() in C:\xampp\htdocs\csci130\project2\booklisting\models\table.class.php on line 22
        if ($data) {
            foreach ($data as $key => $value) {
                $this->$key = $value;
            }
        }
    }

    public function load($id)
    {
        $this->id = $id;
        $database = new Database;
        $query = $this->buildQuery('load');
        // echo $query;
        $data = $database->getQuery($query);
        $this->bind($data);
    }

    public function store()
    {
        $database = new Database;
        $query = $this->buildQuery('store');
        // echo $query;
        $database->setQuery($query);
    }

    public function set($field, $value)
    {
        $database = new Database;
        $query = "UPDATE {$this->tablename} SET {$field }= '{$value}' WHERE id = '{$this->id}'";
        // echo $query;
        $database->setQuery($query);
    }

    protected function buildQuery($task)
    {
        $query = "";
        if ($task == 'store') {
            $classvars = get_class_vars(get_class($this));
            if ($this->id === NULL || $this->id === 0 || $this->id === '') {
                // new table
                $keys = "";
                $values = "";
                $query .= "INSERT INTO {$this->tablename} ";

                foreach ($classvars as $key => $value) {
                    if ($key == "id" || $key == "tablename" || $key == "datecreated" ||
                        $key == "datemodified" || $key == "isdeleted" || $key == "views" || $key == "numcomments")
                        continue;
                    if ($this->tablename == "user" && ($key == "type"))
                        continue;
                    $keys .= "{$key}, ";
                    $values .= "'{$this->$key}', ";
                }
                // strip off the dangling comma
                $query .= "(" . substr($keys, 0, -2) .
                    ") VALUES (" . substr($values, 0, -2) . ")";

            } else {
                // update table
                $query .= "UPDATE {$this->tablename} SET ";
                foreach ($classvars as $key => $value) {
                    if ($key == "id" || $key == "tablename" || $key == "datecreated" ||
                        $key == "datemodified" || $key == "views" || $key == "numcomments")
                        continue;
                    if ($this->tablename == "user" && ($key == "password" || $key == "type" || $key == "newuser"))
                        continue;
                    $query .= "{$key} = '{$this->$key}', ";
                }
                // strip off the dangling comma
                $query = substr($query, 0, -2) . " WHERE id = {$this->id}";
            }
        } else if ($task == 'load') {
            $query = "SELECT * FROM {$this->tablename} WHERE id = '{$this->id}'";

        }
        return $query;
    }
}
