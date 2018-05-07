<?php
if (isset($_GET['page'])) {
    $page = $_GET['page'];
    if ($page < 1) $page = 1;
} else
    $page = 1;

function getparams($sortfield, $sortorder)
{
    if (isset($_GET['sort']))
        return '&sort=' . $sortfield . '&order=' . $sortorder;
    else
        return null;
}
?>

<div class="ui center aligned container items">
    <div class="ui pagination menu">
        <a href="<?php echo($filename) ?>?page=<?php echo($page - 1);
        echo(getparams($sortfield, $sortorder)) ?>"
           class="<?php if ($page == 1) echo('disabled') ?> item">Prev</a>
        <?php if ($page > 2) echo('<div class="disabled item">...</div>') ?>
        <?php if ($page > 1) echo('<a href="' . $filename . '?page=' . ($page - 1) .
            (getparams($sortfield, $sortorder)) . '" class="item">' . ($page - 1) . '</a>') ?>
        <a href="<?php echo($filename) ?>?page=<?php echo($page);
        echo(getparams($sortfield, $sortorder)) ?>" class="item active"><?php echo($page) ?></a>
        <a href="<?php echo($filename) ?>?page=<?php echo($page + 1);
        echo(getparams($sortfield, $sortorder)) ?>" class="item"><?php echo($page + 1) ?></a>
        <div class="disabled item">...</div>
        <a href="<?php echo($filename) ?>?page=<?php echo($page + 1);
        echo(getparams($sortfield, $sortorder)) ?>" class="item">Next</a>
    </div>
</div>
