<div id="comments" class="ui comments">
    <h3 class="ui dividing header">
        Comments <?php
        if ($book->numcomments >= 10)
            echo('(last 10)');
        if ($book->numcomments > 0)
            echo('(' . $book->numcomments . ')');
        ?>
    </h3>

    <?php

    function load($page, $limit, $id)
    {
        $tablename = "comments";
        $offset = ($page - 1) * $limit;
        $sortfield = "datecreated";
        $sortorder = "DESC";

        $database = new Database;
        $query = "SELECT * FROM {$tablename} WHERE bookid={$id} ORDER BY {$sortfield} {$sortorder} LIMIT {$limit} OFFSET {$offset}";
        $results = $database->setQuery($query);

        while ($row = $results->fetch_array()) {
            $comment = new Comment();
            $comment->bind($row);

            $poster = new User();
            $poster->load($comment->userid);
            if ($poster->picture) $pic = $poster->picture; else $pic = 'images/jenny.jpg';
            echo('<div class="comment">
                    <a class="avatar">
                        <img src="' . $pic . '">
                    </a>
                    <div class="content">
                        <a class="author">' . $poster->firstname . ' ' . $poster->lastname . '</a>
                        <div class="metadata">
                            <span class="date">' . (date("m/d/Y g:i A", strtotime($comment->datecreated))) . '</span>
                        </div>
                        <div class="text">
                            ' . nl2br(htmlspecialchars_decode($comment->comment)) . '
                        </div>
                        <div class="actions">
                            <a class="reply">Reply</a>
                        </div>
                    </div>
                </div>');
        }
    }

    if ($book->numcomments > 0) {
        $page = 1;
        load($page, 10, $book->id);
    } else {
        echo('<p>Be the first one to post a comment.</p>');
    }

    ?>

    <form class="ui  <?php if ($show_success) echo 'success'; elseif ($show_error) echo 'error' ?> reply form"
          method="post"
          action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>?id=<?php echo($book->id) ?>#message">
        <div class="<?php if (!loggendin()) echo('disabled') ?> field">
            <textarea id="reply" name="reply" placeholder="Type your comment here..."></textarea>
        </div>

        <div class="ui error message">
            <div class="header">Error</div>
            <p>Failed to add new comment, please make sure that you have imputed all the information correctly.</p>
        </div>

        <div id="message" class="ui success message">
            <div class="header">Success</div>
            <p>New comment posted successfully, thank you for your contribution.</p>
        </div>

        <button type="submit" class="ui teal labeled submit icon <?php if (!loggendin()) echo('disabled') ?> button"
                tabindex="0">
            <i class="icon edit"></i> <?php if (loggendin()) echo('Add Comment'); else echo('Please login to post comment'); ?>
        </button>
    </form>
</div>