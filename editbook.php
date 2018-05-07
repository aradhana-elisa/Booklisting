<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Book Listing: Edit book</title>
    <?php include_once 'dependencies.php';
    if (!loggendin()) header("location: index.php");
    ?>
</head>
<body>

<?php
include "models/textbook.class.php";
include "models/storybook.class.php";
include "models/magazine.class.php";
include "models/comic.class.php";

$category = "Book";
$id = 0;
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
                $book->id = $id;
                $book->store();
                $show_success = true;
                break;
            case "Storybook":
                $book = new Storybook();
                $book->newbook(format($_POST["title"]), format($_POST["subtitle"]), getinfo('id'),
                    format($_POST["description"]), format($_POST["author"]), $_POST["price"],
                    format($_POST["publisher"]), $_POST["isbn"], $_POST["cover"],
                    $_POST["pages"], $_POST["genre"]);
                $book->id = $id;
                $book->store();
                $show_success = true;
                break;
            case "Magazine":
                $book = new Magazine();
                $book->newbook(format($_POST["title"]), format($_POST["subtitle"]), getinfo('id'),
                    format($_POST["description"]), format($_POST["author"]), $_POST["price"],
                    format($_POST["publisher"]), $_POST["isbn"], $_POST["cover"],
                    $_POST["pages"], $_POST["publishdate"]);
                $book->id = $id;
                $book->store();
                $show_success = true;
                break;
            case "Comic":
                $book = new Comic();
                $book->newbook(format($_POST["title"]), format($_POST["subtitle"]), getinfo('id'),
                    format($_POST["description"]), format($_POST["author"]), $_POST["price"],
                    format($_POST["publisher"]), $_POST["isbn"], $_POST["cover"],
                    $_POST["pages"], $_POST["type"]);
                $book->id = $id;
                $book->store();
                $show_success = true;
                break;
        }
    }
} else {
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
                <i class="right angle icon divider"></i>
                <div class="active section">Edit book</div>
                <i class="right arrow icon divider"></i>
                <div class="active section"><?php echo($book->title) ?></div>
            </div>
        </section>
    </div>

    <section class="ui segment custom-form">
        <form class="ui <?php if ($show_success) echo 'success'; elseif ($show_error) echo 'error' ?> form book-form"
              method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>?id=<?php echo($book->id) ?>">
            <h4 class="ui dividing header">Book Information</h4>
            <div class="fields">
                <div class="eight wide field required">
                    <label>Title</label>
                    <input type="text" name="title" maxlength="256" placeholder="Book title"
                           value="<?php echo($book->title) ?>">
                </div>
                <div class="eight wide field required">
                    <label>Subtitle</label>
                    <input type="text" name="subtitle" maxlength="256" placeholder="Book subtitle"
                           value="<?php echo($book->subtitle) ?>">
                </div>
            </div>
            <div class="fields">
                <div class="four wide field">
                    <label>Author</label>
                    <input type="text" name="author" maxlength="64" placeholder="Author name"
                           value="<?php echo($book->author) ?>">
                </div>
                <div class="four wide field">
                    <label>Publisher</label>
                    <input type="text" name="publisher" maxlength="64" placeholder="Publisher name"
                           value="<?php echo($book->publisher) ?>">
                </div>
                <div class="four wide field required">
                    <label>ISBN</label>
                    <input type="text" name="isbn" minlength="13" maxlength="13" placeholder="ISBN 13"
                           value="<?php echo($book->isbn) ?>">
                </div>
                <div class="four wide field">
                    <label>Price</label>
                    <input type="number" step="0.01" min="0.00" max="1000.00" name="price" placeholder="Price in $"
                           value="<?php echo($book->price) ?>">
                </div>
            </div>
            <div class="fields">
                <div class="four wide field required">
                    <label>Category</label>
                    <select id="category" name="category" class="ui fluid category dropdown">
                        <option <?php if ($book->category == "Textbook") echo('selected') ?>
                                value="Textbook">Textbook
                        </option>
                        <option <?php if ($book->category == "Storybook") echo('selected') ?>
                                value="Storybook">Storybook
                        </option>
                        <option <?php if ($book->category == "Magazine") echo('selected') ?>
                                value="Magazine">Magazine
                        </option>
                        <option <?php if ($book->category == "Comic") echo('selected') ?>
                                value="Comic">Comic
                        </option>
                    </select>
                </div>
                <div class="four wide field">
                    <label>Pages</label>
                    <input type="number" min="1" max="10000" name="pages" placeholder="# of pages"
                           value="<?php echo($book->pages) ?>">
                </div>
                <div class="eight wide field required">
                    <label>Cover Image</label>
                    <input type="text" name="cover" placeholder="Image URL or Link"
                           value="<?php echo($book->cover) ?>">
                </div>
            </div>
            <div class="field">
                <label>Description</label>
                <textarea rows="3" name="description"
                          placeholder="Book details and description"><?php echo($book->description) ?></textarea>
            </div>

            <h4 class="ui dividing header">Additional Information
                <span class="info-type">(<?php echo($book->category) ?>)</span>
            </h4>
            <div class="four wide field <?php if ($book->category != "Textbook") echo('no-show') ?> info-textbook">
                <label>Course</label>
                <input type="text" name="course" maxlength="24" placeholder="Textbook course"
                       value="<?php echo($book->course) ?>">
            </div>

            <div class="four wide field <?php if ($book->category != "Storybook") echo('no-show') ?> info-storybook">
                <label>Genre</label>
                <select name="genre" class="ui fluid dropdown">
                    <option value="">Storybook genre</option>
                    <option <?php if ($book->genre == "Action and Adventure") echo('selected') ?>
                            value="Action and Adventure">Action and Adventure
                    </option>
                    <option <?php if ($book->genre == "Biographies") echo('selected') ?>
                            value="Biographies">Biographies
                    </option>
                    <option <?php if ($book->genre == "Drama") echo('selected') ?>
                            value="Drama">Drama
                    </option>
                    <option <?php if ($book->genre == "Fantasy") echo('selected') ?>
                            value="Fantasy">Fantasy
                    </option>
                    <option <?php if ($book->genre == "Horror") echo('selected') ?>
                            value="Horror">Horror
                    </option>
                    <option <?php if ($book->genre == "History") echo('selected') ?>
                            value="History">History
                    </option>
                    <option <?php if ($book->genre == "Mystery") echo('selected') ?>
                            value="Mystery">Mystery
                    </option>
                    <option <?php if ($book->genre == "Romance") echo('selected') ?>
                            value="Romance">Romance
                    </option>
                    <option <?php if ($book->genre == "Science fiction") echo('selected') ?>
                            value="Science fiction">Science fiction
                    </option>
                </select>
            </div>

            <div class="four wide field <?php if ($book->category != "Magazine") echo('no-show') ?> info-magazine">
                <label>Publish date</label>
                <input type="number" min="1990" max="2020" name="publishdate" step="1"
                       placeholder="Year published" value="<?php echo($book->publishdate) ?>">
            </div>

            <div class="four wide field <?php if ($book->category != "Comic") echo('no-show') ?> info-comic">
                <label>Type</label>
                <select name="type" class="ui fluid dropdown">
                    <option value="">Comics type</option>
                    <option <?php if ($book->type == "Alternative Comic") echo('selected') ?>
                            value="Alternative Comic">Alternative Comic
                    </option>
                    <option <?php if ($book->type == "Action") echo('selected') ?>
                            value="Action">Action
                    </option>
                    <option <?php if ($book->type == "Fantasy") echo('selected') ?>
                            value="Fantasy">Fantasy
                    </option>
                    <option <?php if ($book->type == "Manga") echo('selected') ?>
                            value="Manga">Manga
                    </option>
                    <option <?php if ($book->type == "Horror") echo('selected') ?>
                            value="Horror">Horror
                    </option>
                    <option <?php if ($book->type == "Romance") echo('selected') ?>
                            value="Romance">Romance
                    </option>
                    <option <?php if ($book->type == "Science fiction") echo('selected') ?>
                            value="Science Fiction">Science Fiction
                    </option>
                </select>
            </div>

            <div class="ui error message">
                <div class="header">Error</div>
                <p>Failed to edit book, please make sure that you have imputed all the information correctly.</p>
            </div>

            <div class="ui success message">
                <div class="header">Success</div>
                <p>Book edited successfully, thank you for your contribution.</p>

                <a href="book.php?id=<?php echo($book->id) ?>" class="ui basic button">
                    <i class="icon book"></i>
                    View book
                </a>

            </div>

            <p>Note: <i>Fields marked with (*) are required fields.</i></p>

            <button type="submit" class="ui button" tabindex="0">Submit revision</button>
        </form>
    </section>
</div>
    <?php include_once 'includes/footer.inc.php' ?>


</body>
<script src="javascript/script.js"></script>
</html>