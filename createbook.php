<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Book Listing: Create new book</title>
    <?php include_once 'dependencies.php';
    if (!loggendin()) header("location: index.php");
    ?>
</head>
<body>

<?php

include_once "models/textbook.class.php";
include_once "models/storybook.class.php";
include_once "models/magazine.class.php";
include_once "models/comic.class.php";

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

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    //echo(format($_POST["subtitle"]));
    if (empty($_POST["title"]) || empty($_POST["subtitle"]) ||
        empty($_POST["isbn"]) || empty($_POST["cover"]) || empty($_POST["category"])) {
        $show_error = true;
    } else {
        switch ($_POST["category"]) {
            case "Textbook":
                $book = new Textbook();
                $book->newbook(format($_POST["title"]), format($_POST["subtitle"]), getinfo('id'),
                    format($_POST["description"]), format($_POST["author"]), $_POST["price"],
                    format($_POST["publisher"]), $_POST["isbn"], $_POST["cover"],
                    $_POST["pages"], format($_POST["course"]));
                $book->store();
                $show_success = true;
                break;
            case "Storybook":
                $book = new Storybook();
                $book->newbook(format($_POST["title"]), format($_POST["subtitle"]), getinfo('id'),
                    format($_POST["description"]), format($_POST["author"]), $_POST["price"],
                    format($_POST["publisher"]), $_POST["isbn"], $_POST["cover"],
                    $_POST["pages"], $_POST["genre"]);
                $book->store();
                $show_success = true;
                break;
            case "Magazine":
                $book = new Magazine();
                $book->newbook(format($_POST["title"]), format($_POST["subtitle"]), getinfo('id'),
                    format($_POST["description"]), format($_POST["author"]), $_POST["price"],
                    format($_POST["publisher"]), $_POST["isbn"], $_POST["cover"],
                    $_POST["pages"], $_POST["publishdate"]);
                $book->store();
                $show_success = true;
                break;
            case "Comic":
                $book = new Comic();
                $book->newbook(format($_POST["title"]), format($_POST["subtitle"]), getinfo('id'),
                    format($_POST["description"]), format($_POST["author"]), $_POST["price"],
                    format($_POST["publisher"]), $_POST["isbn"], $_POST["cover"],
                    $_POST["pages"], $_POST["type"]);
                $book->store();
                $show_success = true;
                break;
        }
    }
}
?>


<div class="ui container">

    <?php include_once 'includes/header.inc.php' ?>
</div>
    <?php include_once 'includes/nav.inc.php' ?>
<div class="ui container">
    <div class="ui grid">
        <section class="wide column">
            <div class="ui large breadcrumb">
                <a href="index.php" class="section">Home</a>
                <i class="right arrow icon divider"></i>
                <div class="active section">Create new book</div>
            </div>
        </section>
    </div>

    <section class="ui segment custom-form">
        <form class="ui <?php if ($show_success) echo 'success'; elseif ($show_error) echo 'error' ?> form book-form"
              method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>">
            <h4 class="ui dividing header">Book Information</h4>
            <div class="fields">
                <div class="eight wide field required">
                    <label>Title</label>
                    <input type="text" name="title" maxlength="256" placeholder="Book title">
                </div>
                <div class="eight wide field required">
                    <label>Subtitle</label>
                    <input type="text" name="subtitle" maxlength="256" placeholder="Book subtitle">
                </div>
            </div>
            <div class="fields">
                <div class="four wide field">
                    <label>Author</label>
                    <input type="text" name="author" maxlength="64" placeholder="Author name">
                </div>
                <div class="four wide field">
                    <label>Publisher</label>
                    <input type="text" name="publisher" maxlength="64" placeholder="Publisher name">
                </div>
                <div class="four wide field required">
                    <label>ISBN</label>
                    <input type="text" name="isbn" minlength="13" maxlength="13" placeholder="ISBN 13">
                </div>
                <div class="four wide field">
                    <label>Price</label>
                    <input type="number" step="0.01" min="0.00" max="1000.00" name="price" placeholder="Price in $">
                </div>
            </div>
            <div class="fields">
                <div class="four wide field required">
                    <label>Category</label>
                    <select id="category" name="category" class="ui fluid category dropdown">
                        <option value="Textbook">Textbook</option>
                        <option value="Storybook">Storybook</option>
                        <option value="Magazine">Magazine</option>
                        <option value="Comic">Comic</option>
                    </select>
                </div>
                <div class="four wide field">
                    <label>Pages</label>
                    <input type="number" min="1" max="10000" name="pages" placeholder="# of pages">
                </div>
                <div class="eight wide field required">
                    <label>Cover Image</label>
                    <input type="text" name="cover" placeholder="Image URL or Link">
                </div>
            </div>
            <div class="field">
                <label>Description</label>
                <textarea rows="3" name="description" placeholder="Book details and description"></textarea>
            </div>

            <h4 class="ui dividing header">Additional Information
                <span class="info-type">(Textbook)</span>
            </h4>
            <div class="four wide field info-textbook">
                <label>Course</label>
                <input type="text" name="course" maxlength="24" placeholder="Textbook course">
            </div>

            <div class="four wide field no-show info-storybook">
                <label>Genre</label>
                <select name="genre" class="ui fluid dropdown">
                    <option value="">Storybook genre</option>
                    <option value="Action and Adventure">Action and Adventure</option>
                    <option value="Biographies">Biographies</option>
                    <option value="Drama">Drama</option>
                    <option value="Fantasy">Fantasy</option>
                    <option value="Horror">Horror</option>
                    <option value="History">History</option>
                    <option value="Mystery">Mystery</option>
                    <option value="Romance">Romance</option>
                    <option value="Science fiction">Science fiction</option>
                </select>
            </div>

            <div class="four wide field no-show info-magazine">
                <label>Publish date</label>
                <input type="number" min="1990" max="2020" name="publishdate" step="1"
                       placeholder="Year published">
            </div>

            <div class="four wide field no-show info-comic">
                <label>Type</label>
                <select name="type" class="ui fluid dropdown">
                    <option value="">Comics type</option>
                    <option value="Alternative Comic">Alternative Comic</option>
                    <option value="Action">Action</option>
                    <option value="Fantasy">Fantasy</option>
                    <option value="Manga">Manga</option>
                    <option value="Horror">Horror</option>
                    <option value="Romance">Romance</option>
                    <option value="Science Fiction">Science Fiction</option>
                </select>
            </div>

            <div class="ui error message">
                <div class="header">Error</div>
                <p>Failed to add a book, please make sure that you have imputed all the information correctly.</p>
            </div>

            <div class="ui success message">
                <div class="header">Success</div>
                <p>New book added successfully, thank you for your contribution.</p>
            </div>

            <p>Note: <i>Fields marked with (*) are required fields.</i></p>

            <button type="submit" class="ui button" tabindex="0">Create new book</button>
        </form>
    </section>
</div>
    <?php include_once 'includes/footer.inc.php' ?>

</body>
<script src="javascript/script.js"></script>
</html>