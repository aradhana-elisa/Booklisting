<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Book Listing: Contact Us</title>
    <?php include_once 'dependencies.php' ?>
</head>
<body>

<div class="ui container">
    <?php include_once 'includes/header.inc.php'; ?>
</div>

<?php include_once 'includes/nav.inc.php' ?>
<div class="ui container">
    <div class="ui grid">
        <section class="twelve wide column">
            <div class="ui large breadcrumb">
                <a href="index.php" class="section">Home</a>
                <i class="right arrow icon divider"></i>
                <div class="active section">Contact Us</div>
            </div>
        </section>
    </div>
    <div class="ui cards segment contactus">
        <h2 class="ui header">Get in Touch</h2>
        <p>The goal of this project was to create a website that allows people to add items in a database and browse
            among a list of items and to give comments on the different items. This project was developed under the
            guidance of Dr Hubert Cecotti. <br/><br/>Below mentioned is the information about the Authors:</p>
        <div class="card">
            <div class="content">
                <img class="right floated mini ui circular image" src="images/molly.png">
                <div class="header">Aradhana Elisa</div>
                <div class="meta">Computer Science</div>
                <div class="meta">Fresno, CA</div>
                <div class="description">
                    <p>
                        <i class="mail icon"></i><a href="mailto:shifatul@mail.fresnostate.edu">aradhanaelisa@mail.fresnostate.edu</a>
                    </p>
                    <p><i class="volume control phone icon"></i>818-897-8907</p>
                </div>
                <div class="description">
                    <br>Student at Fresno State
                </div>
            </div>
            <div class="extra content">
                <div class="ui two buttons custom-buttons">
                    <div class="ui basic black button"><a href="https://github.com/aradhana-elisa" target="_blank">Github</a>
                    </div>
                    <div class="ui basic blue button"><a href="https://www.linkedin.com/in/aradhanaelisa/" target="_blank">LinkedIn</a>
                    </div>
                </div>
            </div>
        </div>
        <div class="card">
            <div class="content">
                <img class="right floated mini ui circular image" src="images/matt.jpg">
                <div class="header">Sif Islam</div>
                <div class="meta">Computer Science</div>
                <div class="meta">Fresno, CA</div>
                <div class="description">
                    <p>
                        <i class="mail icon"></i><a href="mailto:shifatul@mail.fresnostate.edu">shifatul@mail.fresnostate.edu</a>
                    </p>
                    <p><i class="volume control phone icon"></i>646-820-8602</p>
                </div>
                <div class="description">
                    <br>Student at Fresno State
                </div>

            </div>
            <div class="extra content">
                <div class="ui two buttons custom-buttons">
                    <a href="https://github.com/ThunderRoid" target="_blank" class="ui basic black button">Github</a>
                    <a href="https://www.linkedin.com/in/shifatul-islam-a8559479/" target="_blank"
                       class="ui basic blue button">LinkedIn</a>
                </div>
            </div>
        </div>

    </div>
</div>
<?php include_once 'includes/footer.inc.php' ?>

</body>
<script src="javascript/script.js"></script>
</html>