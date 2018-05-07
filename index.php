<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <?php include_once 'dependencies.php' ?>
    <title>Book Listing: <?php echo(ucfirst($shortname)) ?></title>
</head>
<body>

<div class="ui container">

    <?php include_once 'includes/header.inc.php'; ?>
</div>

<?php include_once 'includes/nav.inc.php'; ?>

<div class="ui container">
    <?php

    if (isset($_GET['msg'])) {
        $msg = $_GET['msg'];
        if ($msg == 'delete') {
            echo
            ('<div class="ui success message">
              <i class="close icon"></i>
              <div class="header">
                Book deleted successful.
              </div>
              <p>You may now continue browsing other books</p>
            </div>');
        } else if ($msg == 'new') {
            echo
            ('<div class="ui info message">
              <i class="close icon"></i>
              <div class="header">
                Welcome to BookListing?
              </div>
              <ul class="list">
                <li>Now you can list new books.</li>
                <li>And comment on any books.</li>
              </ul>
            </div>');
        }
    }

    include_once 'includes/title.main.inc.php';

    include_once 'includes/book.card.inc.php';

    include_once 'includes/pagination.inc.php';
    ?>
</div>
<?php
include_once 'includes/footer.inc.php';

?>

</div>
</body>
<script src="javascript/script.js"></script>
</html>