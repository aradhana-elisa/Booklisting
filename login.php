<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Book Listing: Login</title>
    <?php include_once 'dependencies.php' ?>
    <link rel="stylesheet" type="text/css" href="styles/login.css">
</head>
<body>

<?php

ob_start();  // Turn on output buffering

$show_success = false;
$show_error = false;

function format($data)
{
    $data = trim($data);
    $data = addslashes($data);
    $data = htmlspecialchars($data);
    return $data;
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    if (empty($_POST["username"]) || empty($_POST["password"])) {
        $show_error = true;
    } else {
        $checkuser = new User();
        $checkuser->checkusername(format($_POST["username"]));
        if ($checkuser->id) {
            $hash = $checkuser->password;
            if (password_verify($_POST["password"], $hash)) {
                session_start();
                $_SESSION['loggedin'] = true;
                $_SESSION['id'] = $checkuser->id;
                $_SESSION['username'] = $checkuser->username;
                $_SESSION['firstname'] = $checkuser->firstname;
                $_SESSION['lastname'] = $checkuser->lastname;
                $_SESSION['email'] = $checkuser->email;
                $_SESSION['gender'] = $checkuser->gender;
                $_SESSION['dob'] = $checkuser->dob;
                $_SESSION['type'] = $checkuser->type;
                $_SESSION['picture'] = $checkuser->picture;
                if ($checkuser->newuser == 1) {
                    $checkuser->newuser = 0;
                    $checkuser->store();
                    header("location: index.php?msg=new");
                } else
                    header("location: index.php");
            } else {
                $show_error = true;
            }
        } else {
            $show_error = true;
        }
    }
}

?>

<div class="ui middle aligned center aligned grid">
    <div class="column">
        <a href="index.php">
            <h2 class="ui teal image header">
                <img src="images/logo.png" class="image">
                <div class="content">
                    Log-in to your account
                </div>
            </h2>
        </a>
        <form class="ui large login-form <?php if ($show_success) echo 'success'; elseif ($show_error) echo 'error' ?>
         form" method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>">
            <div class="ui stacked segment">
                <div class="field required">
                    <label>Username</label>
                    <div class="ui left icon input">
                        <i class="user icon"></i>
                        <input type="text" name="username" maxlength="256" placeholder="Your username">
                    </div>
                </div>
                <div class="field required">
                    <label>Password</label>
                    <div class="ui left icon input">
                        <i class="lock icon"></i>
                        <input type="password" name="password" maxlength="256" placeholder="Your password">
                    </div>
                </div>

                <p>Note: <i>Fields marked with (*) are required fields.</i></p>
                <button type="submit" class="ui fluid large teal submit button" tabindex="0">Log-in</button>
            </div>

            <div class="ui error message">
                <div class="header">Error</div>
                <p>Login failed, please make sure that you have imputed all the information correctly.</p>
            </div>

        </form>

        <div class="ui message">
            New to us? <a href="createuser.php">Register</a>
        </div>
    </div>
</div>

</body>
<script src="javascript/script.js"></script>
</html>