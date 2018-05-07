<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Book Listing: Edit Profile</title>
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
	$user_exists = false;

    function format($data)
    {
        $data = trim($data);
        $data = addslashes($data);
        $data = htmlspecialchars($data);
        return $data;
    }

    if ($_SERVER["REQUEST_METHOD"] == "POST") {

        if (empty($_POST["username"]) || empty($_POST["firstname"]) || empty($_POST["lastname"]) ||
            empty($_POST["email"]) || empty($_POST["dob"])) {
            $show_error = true;
        } else {
            $user = new User();
			$user->newuser(format($_POST["username"]), format($_POST["firstname"]), format($_POST["lastname"]),
            format($_POST["email"]), format($_POST["gender"]), format($_POST["dob"]),
            "", $_POST["picture"]);

            $user->id = getinfo('id');
            $user->type = getinfo('type');

			$user->store();
			$_SESSION['loggedin'] = true;
			$_SESSION['id'] = $user->id;
			$_SESSION['username'] = $user->username;
			$_SESSION['firstname'] = $user->firstname;
			$_SESSION['lastname'] = $user->lastname;
			$_SESSION['email'] = $user->email;
			$_SESSION['gender'] = $user->gender;
			$_SESSION['dob'] = $user->dob;
			$_SESSION['type'] = $user->type;
			$_SESSION['picture'] = $user->picture;

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
                <div class="active section">Edit Profile</div>
            </div>
        </section>
    </div>

    <section class="ui segment custom-form">
        <form class="ui <?php if ($show_success) echo 'success'; elseif ($show_error) echo 'error' ?> form editprofile-form"
              method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>?id=<?php echo getinfo('id')?>">
            <h4 class="ui dividing header">Edit Profile</h4>
            <div class="fields">
                <div class="eight wide field required">
                    <label>Username</label>
                    <input type="text" name="username" maxlength="256" placeholder="Pick a username"
                           value="<?php echo(getinfo('username')); ?>">
                </div>
                <div class="eight wide field required">
                    <label>First Name</label>
                    <input type="text" name="firstname" maxlength="256" placeholder="Your first name"
                           value="<?php echo(getinfo('firstname')); ?>">
                </div>
            </div>
            <div class="fields">
                <div class="four wide field required">
                    <label>Last Name</label>
                    <input type="text" name="lastname" maxlength="256" placeholder="Your last name"
                           value="<?php echo(getinfo('lastname')); ?>">
                </div>
                <div class="four wide field required">
                    <label>Email Address</label>
                    <input type="email" name="email" maxlength="256" placeholder="A valid email address"
                           value="<?php echo(getinfo('email')); ?>">
                </div>
                <div class="four wide field required">
                    <label>Gender</label>
                    <select id="" name="gender" class="ui fluid dropdown">
                        <option value="1" <?php if (getinfo('gender') == 1) echo('selected') ?>>Male</option>
                        <option value="2" <?php if (getinfo('gender') == 2) echo('selected') ?>>Female</option>
                    </select>
                </div>
                <div class="four wide field">
                    <label>Date of Birth</label>
                    <input type="date" name="dob" placeholder="Date of Birth" value="<?php echo(getinfo('dob')); ?>">
                </div>
            </div>
            <div class="fields">
                <div class="eight wide field">
                    <label>Profile Image</label>
                    <input type="text" name="picture" placeholder="Image URL or Link"
                           value="<?php echo(getinfo('picture')); ?>">
                </div>
            </div>

            <div class="ui error message">
                <div class="header">Error</div>
                <p>Failed to edit your profile, please make sure that you have inputed all the information
                    correctly.</p>
            </div>

            <div class="ui success message">
                <div class="header">Success</div>
                <p>Your Profile is successfully saved.</p>
            </div>

            <p>Note: <i>Fields marked with (*) are required fields.</i></p>

            <button type="submit" class="ui button" tabindex="0">Update</button>
        </form>
    </section>
</div>
    <?php include_once 'includes/footer.inc.php' ?>

</body>
<script src="javascript/script.js"></script>
<script>
    $('.ui.radio.checkbox')
        .checkbox();
</script>
</html>