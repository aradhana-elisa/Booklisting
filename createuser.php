<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Book Listing: Sign Up</title>
    <?php include_once 'dependencies.php' ?>
</head>
<body>
<div class="ui container">

    <?php
    include_once 'includes/header.inc.php'; ?>
</div>
<?php
    include_once 'includes/nav.inc.php';

    $show_success = false;
    $show_error = false;
    $user_exists = false;

    function format($data)
    {
        $data = trim($data);
        $data = addslashes($data);
        $data = htmlspecialchars($data);
        return $data;
    }

    function getprevdata($info)
    {
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            if (empty($_POST[$info])) return null;
            else return $_POST[$info];
        } else return null;
    }

    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        if (empty($_POST["username"]) || empty($_POST["firstname"]) || empty($_POST["lastname"]) ||
            empty($_POST["email"]) || empty($_POST["password"]) || empty($_POST["confirmpassword"])) {
            $show_error = true;
        } else {
            $user = new User();
            $user->checkusername(format($_POST["username"]));

            if ($user->id) {
                //cant register when the user name already exists.
                $show_error = true;
                $user_exists = true;
                $show_success = false;
            } else {
                //encrypt the password before storing
                $password = password_hash($_POST["password"], PASSWORD_DEFAULT);

                $user->newuser(format($_POST["username"]), format($_POST["firstname"]), format($_POST["lastname"]),
                    format($_POST["email"]), format($_POST["gender"]), format($_POST["dob"]),
                    $password, $_POST["picture"]);

                $user->store();
                $show_success = true;
            }
        }
    }
    ?>
<div class="ui container">
    <div class="ui grid">
        <section class="wide column">
            <div class="ui large breadcrumb">
                <a href="index.php" class="section">Home</a>
                <i class="right arrow icon divider"></i>
                <div class="active section">Create new User</div>
            </div>
        </section>
    </div>

    <section class="ui segment custom-form">
        <form class="ui <?php if ($show_success) echo 'success'; elseif ($show_error) echo 'error' ?> form register-form"
              method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>">
            <h4 class="ui dividing header">Register</h4>
            <div class="fields">
                <div class="eight wide field required">
                    <label>Username</label>
                    <input type="text" name="username" maxlength="256" placeholder="Pick a username"
                           value="<?php echo(getprevdata('username')) ?>">
                </div>
                <div class="eight wide field required">
                    <label>Email Address</label>
                    <input type="email" name="email" maxlength="256" placeholder="A valid email address"
                           value="<?php echo(getprevdata('email')) ?>">
                </div>
            </div>
            <div class="fields">
                <div class="four wide field required">
                    <label>First Name</label>
                    <input type="text" name="firstname" maxlength="256" placeholder="Your first name"
                           value="<?php echo(getprevdata('firstname')) ?>">
                </div>
                <div class="four wide field required">
                    <label>Last Name</label>
                    <input type="text" name="lastname" maxlength="256" placeholder="Your last name"
                           value="<?php echo(getprevdata('lastname')) ?>">
                </div>

                <div class="four wide field">
                    <label>Gender</label>
                    <select id="" name="gender" class="ui fluid dropdown">
                        <option value="1">Male</option>
                        <option value="2">Female</option>
                    </select>
                </div>
                <div class="four wide field">
                    <label>Date of Birth</label>
                    <input type="date" name="dob" placeholder="Date of Birth"
                           value="<?php echo(getprevdata('dob')) ?>">
                </div>
            </div>
            <div class="fields">
                <div class="four wide field required">
                    <label>Password</label>
                    <input type="password" name="password" placeholder="Password"
                           value="<?php echo(getprevdata('password')) ?>">
                </div>
                <div class="four wide field required">
                    <label>Confirm Password</label>
                    <input type="password" name="confirmpassword" placeholder="Confirm Password"
                           value="<?php echo(getprevdata('confirmpassword')) ?>">
                </div>
                <div class="eight wide field">
                    <label>Profile Image</label>
                    <input type="text" name="picture" placeholder="Image URL or Link"
                           value="<?php echo(getprevdata('picture')) ?>">
                </div>
            </div>

            <div class="ui error message">
                <div class="header">Error</div>
                <?php if ($user_exists)
                    echo '<p>Registration failed, account already exists, please <a href="login.php">Log-in.</a></p>';
                else
                    echo '<p>Registration failed, please make sure that you have inputed all the information correctly.</p>'; ?>
            </div>

            <div class="ui success message <?php if (!$show_success) echo 'hidden'; ?>">
                <div class="header">Success</div>
                <p>You are successfully registered, please <a href="login.php">Log-in</a> to continue to the site. </p>
            </div>

            <p>Note: <i>Fields marked with (*) are required fields.</i></p>

            <button type="submit" class="ui button" tabindex="0">Register</button>
        </form>
    </section>
</div>
    <?php include_once 'includes/footer.inc.php' ?>

</body>
<script src="javascript/script.js"></script>
</html>