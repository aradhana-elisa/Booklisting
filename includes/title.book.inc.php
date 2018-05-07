<div class="ui grid">
    <section class="ten wide column">
        <div class="ui large breadcrumb">
            <a href="index.php" class="section">Home</a>
            <i class="right chevron icon divider"></i>
            <a href="<?php echo(strtolower($book->category)) ?>s.php" class="section"><?php echo($book->category) ?></a>
            <i class="right arrow icon divider"></i>
            <div class="active section"><?php echo($book->title) ?></div>
        </div>
    </section>
    <?php if (loggendin() && (getinfo('type') == 1 || $book->userid == getinfo('id')))
        echo('<section class="six wide column">
        <div class="ui right aligned filter">
            <div class="column">
                <div class="ui labeled icon top right pointing dropdown button">
                    <i class="filter icon"></i>
                    <span class="text">Action</span>
                    <div class="menu">
                        <div class="header">I want to</div>
                        <div class="divider"></div>
                        <a href="editbook.php?id= ' . $book->id . '" class="item"><i class="write icon"></i>
                            Edit book
                        </a>
                        <a id="delete-book" data-value="' . $book->id . '" class="item"><i class="red delete icon"></i>Delete book</a>
                    </div>
                </div>
            </div>
        </div>
    </section>') ?>
</div>