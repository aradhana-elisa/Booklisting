<header class="ui large secondary menu">
    <div class="item">
        <a href="index.php"><img class="ui logo image" src="images/logo.png"></a>
    </div>
    <div class="item">
        <a class="ui header" href="index.php">Book Listing</a>
    </div>
    <div class="right menu">

        <?php
        if (loggendin()) {
            if ($filename !== 'createbook.php')
                echo('<div class="item login"><a class="ui button teal" href="createbook.php">Add new book</a></div>');

            echo('<div class="item login"><a class="ui button" href="logout.php">Log-out</a></div>');
        } else {
            if ($filename !== 'login.php')
                echo('<div class="item login"><a class="ui button" href="login.php">Login</a></div>');

            if ($filename !== 'createuser.php')
                echo('<div class="item login"><a class="ui button teal" href="createuser.php">Sign up</a></div>');
        };

        if (loggendin()) {
            if (getinfo('picture')) $pic = getinfo('picture'); else $pic = 'images/matthew.png';
            if (getinfo('type') == 1) $typ = '<div class="ui red horizontal label">Admin</div>'; else $typ = null;
            echo '<div class="ui item login dropdown">
            <a class=""><img class="ui mini circular avatar image profile-pic" 
            src="' . $pic . '"></a>
            <div class="menu">
                <div class="header">
                    ' . $typ . getinfo('username') . '
                </div>
                <div class="divider"></div>
                <a class="item" href="profile.php">
                    <i class="user icon"></i>View profile
                </a>
                <a class="item" href="editprofile.php">
                    <i class="write icon"></i>Edit profile
                </a>
				<a class="item" href="changepassword.php">
                    <i class="unlock alternate icon"></i>Change Password
                </a>
            </div>
        </div>';
        } ?>
    </div>
</header>


