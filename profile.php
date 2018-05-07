<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Book Listing: Profile</title>
    <?php
    include_once 'dependencies.php';
    if (!loggendin()) header("location: index.php");
    ?>
</head>
<body>

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
                <div class="active section">Profile</div>
            </div>
        </section>
    </div>

    <section class="ui items segment">
        <div class="ui items">
            <div class="item">
                <div class="circular ui image small">
                    <img src="<?php if (getinfo('picture')) echo(getinfo('picture')); else echo('images/matthew.png'); ?>">
                </div>
                <div class="middle aligned content">
                    <div class="header">
                        <?php echo(ucfirst(getinfo('firstname')) . ' ' . ucfirst(getinfo('lastname'))) ?>
                    </div>
                    <div class="description">
                        Username: <?php echo(getinfo('username')) ?>
                    </div>
                    <div class="meta">
                        email: <span class="cinema"><?php echo(getinfo('email')) ?></span>
                    </div>
                    <div class="extra">
                        <div class="ui label"><?php if (getinfo('gender') == 1) echo 'Male'; else echo 'Female'; ?></div>
                        <div class="ui label"><?php echo getinfo('dob'); ?></div>
                        <a href="editprofile.php" class="ui right floated button">Edit profile</a>
						<a href="changepassword.php" class="ui right floated button">Change Password</a>
                        <?php if (getinfo('type') == 1) echo('<div class="ui red label">Admin</div>'); ?>
                    </div>
                </div>
            </div>
        </div>
    </section>
</div>
    <?php include_once 'includes/footer.inc.php' ?>

</body>
<script src="javascript/script.js"></script>
</html>