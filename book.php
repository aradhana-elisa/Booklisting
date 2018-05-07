<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Book Listing: Book</title>
    <?php include_once 'dependencies.php' ?>
</head>
<body>

<div class="ui container">

    <?php

    include_once 'includes/header.inc.php'; ?>
</div>

<?php

include_once "models/comment.class.php";

$category = "Book";
$id = 1;
$show_success = false;
$show_error = false;

function format($data)
{
    $data = trim($data);
    //$data = stripslashes($data);
    $data = addslashes($data);
    $data = htmlspecialchars($data);
    return $data;
}

if (isset($_GET['category']))
    $category = $_GET['category'];

if (isset($_GET['id']))
    $id = $_GET['id'];

switch ($category) {
    case "Textbook":
    case "textbook":
        $book = new Textbook();
        $book->load($id);
        break;
    case "Storybook":
    case "storybook":
        $book = new Storybook();
        $book->load($id);
        break;
    case "Magazine":
    case "magazine":
        $book = new Magazine();
        $book->load($id);
        break;
    case "Comic":
    case "comic":
        $book = new Comic();
        $book->load($id);
        break;
    default:
        $book = new Book();
        $book->load($id);
}

if ($_SERVER["REQUEST_METHOD"] == "POST" && loggendin()) {
    if (empty($_POST["reply"])) {
        $show_error = true;
    } else {
        $comment = new Comment();
        $comment->newcomment(getinfo('id'), $book->id, format($_POST["reply"]));
        $comment->store();
        $show_success = true;
        // new comment added, so increment it
        $book->numcomments = $book->numcomments + 1;
        $book->set('numcomments', $book->numcomments);
    }
} else {
    // increment views if its not a POST
    $book->views = $book->views + 1;
    $book->set('views', $book->views);
}

$creator = new User();
$creator->load($book->userid);

?>

<?php include_once 'includes/nav.inc.php' ?>
<div class="ui container">
    <?php include_once 'includes/title.book.inc.php' ?>

    <div class="ui items">
        <div class="item">
            <div class="ui large image">
                <img src="<?php echo($book->cover) ?>">
            </div>
            <div class="content">
                <h1 class="header"><?php echo($book->title) ?></h1>
                <div class="meta">
                    <h4><?php echo($book->subtitle) ?></h4>
                </div>
                <div class="description">
                    <p><?php echo nl2br(htmlspecialchars_decode($book->description)) ?></p>

                </div>
                <div class="extra">
                    <div class="ui grey label">
                        <?php
                        switch ($book->category) {
                            case "Textbook":
                            case "textbook":
                                echo('Textbook Course: ' . $book->course);
                                break;
                            case "Storybook":
                            case "storybook":
                                echo('Book Genre: ' . $book->genre);
                                break;
                            case "Magazine":
                            case "magazine":
                                echo('Magazine Publish Date: ' . $book->publishdate);
                                break;
                            case "Comic":
                            case "comic":
                                echo('Comic Type: ' . $book->type);
                        }
                        ?>
                    </div>
                </div>
                <div class="ui labels extra">
                    <div class="ui label"><i class="dollar icon"></i><?php echo($book->price) ?></div>
                    <div class="ui label"><i class="user icon"></i><?php echo($book->author) ?></div>
                </div>
                <div class="ui labels extra">
                    <div class="ui label"><i class="unhide icon"></i><?php echo($book->views) ?> views</div>
                    <div class="ui label"><i class="file text outline icon"></i><?php echo($book->pages) ?> pages</div>
                    <div class="ui label"><i class="calendar icon"></i>
                        <?php echo(date("m/d/Y g:i A", strtotime($book->datecreated))) ?>
                    </div>
                </div>
                <div class="ui labels extra">
                    <div class="ui basic label">ISBN: <?php echo($book->isbn) ?></div>
                    <div class="ui basic label">Published by: <?php echo($book->publisher) ?></div>
                </div>
                <div class="extra">
                    <div class="author">
                        <img class="ui avatar image"
                             src="<?php if ($creator->picture) echo($creator->picture); else echo('images/jenny.jpg'); ?>">
                        <?php echo($creator->firstname . ' ' . $creator->lastname) ?>
                    </div>
                </div>
                <div class="extra">
                    <a href="#comments"><i class="comment icon"></i><?php echo($book->numcomments) ?> Comments</a>
                </div>
            </div>
        </div>
    </div>

    <?php include_once 'includes/comments.inc.php' ?>
</div>
<?php include_once 'includes/footer.inc.php' ?>

<div class="ui mini modal transition delete-book">
    <div class="header">
        Delete Book
    </div>
    <div class="content">
        <p>Are you sure you want to delete this book</p>
    </div>
    <div class="actions">
        <div class="ui negative button">
            No
        </div>
        <div class="ui positive right labeled icon button">
            Yes
            <i class="checkmark icon"></i>
        </div>
    </div>
</div>


</body>
<script src="javascript/script.js"></script>
</html>