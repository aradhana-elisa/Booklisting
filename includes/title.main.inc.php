<?php
$sortfield = "datemodified";
$sortorder = "DESC";

if (isset($_GET['sort']))
    $sortfield = $_GET['sort'];

if (isset($_GET['order']))
    $sortorder = $_GET['order'];

$navname = 'index.php';
if ($filename == 'textbooks.php' || $filename == 'storybooks.php' || $filename == 'magazines.php' || $filename == 'comics.php')
    $navname = $filename;

?>

<div class="ui grid">
    <section class="ten wide column">
        <h2 class="ui header">
            <div class="content">
                <?php

                //echo $sortfield . '<br>';
               // echo $sortorder . '<br>';

                if ($sortfield == "title")
                    if ($sortorder == "ASC") {
                        if ($filename == 'index.php')
                            echo('All books in ascending <div class="sub header">Sorted by title (A-Z)</div>');
                        else
                            echo(ucfirst($shortname) . ' in ascending <div class="sub header">Sorted by title (A-Z)</div>');
                    } else {
                        if ($filename == 'index.php')
                            echo('All books in descending <div class="sub header">SSorted by title (Z-A)</div>');
                        else
                            echo(ucfirst($shortname) . ' in descending <div class="sub header">Sorted by books (Z-A)</div>');
                    }
                else
                    if ($sortorder == "ASC") {
                        if ($filename == 'index.php')
                            echo('Old books <div class="sub header">Books that are very old</div>');
                        else
                            echo('Old ' . $shortname . ' <div class="sub header">' . ucfirst($shortname) . ' that are very old</div>');
                    } else {
                        if ($filename == 'index.php')
                            echo('Recently added books <div class="sub header">New and updated ' . $shortname . '</div>');
                        else
                            echo('Recently added ' . $shortname . ' <div class="sub header">New and updated ' . $shortname . '</div>');
                    }
                ?>
            </div>
        </h2>
    </section>
    <section class="six wide column">
        <div class="ui right aligned filter">
            <div class="column">
                <div class="ui labeled icon top right pointing dropdown button">
                    <i class="filter icon"></i>
                    <span class="text">Sort Books</span>
                    <div class="menu">
                        <div class="header"><i class="tags icon"></i>Sort by name</div>
                        <a href="<?php echo($navname) ?>?sort=title&order=ASC" class="item selected">
                            <i class="blue circle icon"></i>Ascending (A-Z)
                        </a>
                        <a href="<?php echo($navname) ?>?sort=title&order=DESC" class="item">
                            <i class="red circle icon"></i>Descending (Z-A)
                        </a>
                        <div class="divider"></div>
                        <div class="header"><i class="calendar icon"></i>Sort by date</div>
                        <a href="<?php echo($navname) ?>?sort=datecreated&order=DESC" class="item">
                            <i class="olive circle icon"></i>Newest first
                        </a>
                        <a href="<?php echo($navname) ?>?sort=datecreated&order=ASC" class="item">
                            <i class="violet circle icon"></i>Oldest first
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </section>
</div>
