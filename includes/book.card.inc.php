<div class="ui four column grid">
    <?php

    function load($page, $limit, $sortfield, $sortorder, $whereclause)
    {
        $tablename = "books";
        $offset = ($page - 1) * $limit;
        $database = new Database;
        $query = "SELECT * FROM {$tablename} {$whereclause} ORDER BY {$sortfield} {$sortorder} LIMIT {$limit} OFFSET {$offset}";
        //echo $query;
        $results = $database->setQuery($query);
        while ($row = $results->fetch_array()) {
            $book = new Book();
            $book->bind($row);
            echo('<div class="cards column">
                <div class="ui fluid link card">
                    <a href="book.php?id=' . $book->id . '" class="image"><img src="' . $book->cover . '"></a>
                    <div class="content">
                        <a href="book.php?id=' . $book->id . '" class="header one-line">' . $book->title . '</a>
                        <a href="' . strtolower($book->category) . 's.php" class="meta">' . $book->category . '</a>
                        <div class="description two-line">' . $book->subtitle . '</div>
                    </div>
                    <div class="extra content">
                        <span class="right floated">' . substr($book->datecreated, 0, 4) . '</span>
                        <a href="book.php?id=' . $book->id . '#comments"><i class="comment icon"></i>' . $book->numcomments . ' Comments</a>
                    </div>
                </div>
            </div>
            ');
        }
    }

    $page = 1;
    $sortfield = "datecreated";
    $sortorder = "DESC";
    $whereclause = "WHERE isdeleted=0";

    if (isset($_GET['page'])) {
        $page = $_GET['page'];
        if ($page < 1) $page = 1;
    }

    if (isset($_GET['sort']))
        $sortfield = $_GET['sort'];

    if (isset($_GET['order']))
        $sortorder = $_GET['order'];

    if ($filename == 'textbooks.php' || $filename == 'storybooks.php' || $filename == 'magazines.php' || $filename == 'comics.php')
        $whereclause = "WHERE isdeleted=0 AND category='" . ucfirst(rtrim($shortname, "s")) . "'";

    load($page, 8, $sortfield, $sortorder, $whereclause);

    ?>
</div>
