<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1"/>
<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0">
<link rel="stylesheet" type="text/css" href="https://semantic-ui.com/dist/semantic.min.css">
<link rel="stylesheet" type="text/css" href="styles/styles.css">
<script
        src="https://code.jquery.com/jquery-3.1.1.min.js"
        integrity="sha256-hVVnYaiADRTO2PzUGmuLJr8BLUSjGIZsDYGmIJLv2b8="
        crossorigin="anonymous">
</script>
<script src="semantic/dist/semantic.min.js"></script>
<link rel="shortcut icon" href="favicon.ico"/>
<?php

session_start();
$filename = basename($_SERVER['PHP_SELF']);
$shortname = str_replace('.php', '', $filename);

include_once "models/table.class.php";
include_once "models/book.class.php";
include_once "models/user.class.php";

function loggendin()
{
    return (isset($_SESSION['loggedin']) && $_SESSION['loggedin'] == true);
}

function getinfo($field)
{
    return $_SESSION[$field];
}

?>