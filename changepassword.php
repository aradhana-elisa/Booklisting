<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Book Listing: Change Password</title>
    <?php
    include_once 'dependencies.php';
    if (!loggendin()) header("location: index.php");
    ?>
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

if ($_SERVER["REQUEST_METHOD"] == "POST") {

    if (empty($_POST["password"]) || empty($_POST["confirmpassword"])) {
        $show_error = true;
    } else {
        $user = new User();
        $user->id = getinfo('id');
        $password = password_hash($_POST["password"], PASSWORD_DEFAULT);
        $user->set('password', $password);
        $show_success = true;
    }
}
?>
<div class="ui container">
    <div class="ui grid">
        <section class="wide column">
            <div class="ui large breadcrumb">
                <a href="index.php" class="section">Home</a>
                <i class="right arrow icon divider"></i>
                <div class="active section">Change Password</div>
            </div>
        </section>
    </div>

    <section class="ui segment custom-form">
        <form class="ui <?php if ($show_success) echo 'success'; elseif ($show_error) echo 'error' ?> form editprofile-form"
              method="post"
              action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>?id=<?php echo getinfo('id') ?>">
            <h4 class="ui dividing header">Change Password</h4>
            <div class="fields">
                <div class="four wide field required">
                    <label>Password</label>
                    <input type="password" name="password" placeholder="New Password" value="">
                </div>
                <div class="four wide field required">
                    <label>Confirm Password</label>
                    <input type="password" name="confirmpassword" placeholder="Confirm Password" value="">
                </div>
            </div>
            <div class="ui error message">
                <div class="header">Error</div>
                <p>Failed to change your password, please make sure that you have inputed all the information
                    correctly.</p>
            </div>

            <div class="ui success message">
                <div class="header">Success</div>
                <p>Your Password is changed successfully.</p>
            </div>

            <p>Note: <i>Fields marked with (*) are required fields.</i></p>

            <button type="submit" class="ui button" tabindex="0">Update Password</button>
        </form>
    </section>
</div>
<?php include_once 'includes/footer.inc.php' ?>

</body>
<script src="javascript/script.js"></script>
</html>