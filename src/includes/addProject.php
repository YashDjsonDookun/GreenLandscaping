<?php
include("./../../src/config.php");
include("./../../src/includes/fetchFromDatabase.php");
include("./../../src/handlers/login-handler.php");

if (isset($_SESSION['adminUser']))
{
    $adminUser = $_SESSION['adminUser'];
}
else {
    echo "
        <script>
            alert('You should be Logged In as an Administrator first before accessing the Control Panel!');
            window.location = './../../projects.php';
        </script>
    ";
}
?>
<!DOCTYPE html>
<html>
<head>
    <title>Green Landscaping - Add</title>
    <link href="https://fonts.googleapis.com/css?family=Roboto&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="./../../assets/style/style.css">
</head>
<body>
<div class="wrapper">
    <header>
        <nav>
            <div class="logo">
                <img src="./../../assets/images/logo.png" alt="">
            </div>
            <div class="pageLinks">
                <ul>
                    <li><a href="./../../index.php">HOME</a></li>
                    <li><a href="./../../projects.php">PROJECTS</a></li>
                    <li><a href="./../../controlPanel.php" style="background-color: #940000;">CPanel</a></li>
                </ul>
            </div>
        </nav>
    </header>
    <div class="content">
        <section class="top">
            <form action="./../../controlPanel.php" method="POST">
                <?php
                    echo "
                        <h3>User: </h3> <h1 style='margin-bottom: 12px;'>". $adminUser ." </h1>
                    ";
                ?>
                <input type="submit" name="logoutButton" value="Log Out">
            </form>
        </section>
        <section class="title">
            <div class="bar">
                <span id="barLeft"></span>
            </div>
            <h1>Add Project</h1>
            <div class="bar">
                <span id="barRight"></span>
            </div>
        </section>
        <section class="main">
            <form action="addProject.php" method="POST" id="controlPanelForm">
                <div class="addTitle">
                    <label for="title">Project Title:</label>
                    <input type="text" id="title" placeholder="projectTitle" name="title">
                </div>
                <div class="addThumbnail">
                    <label for="thumbnail">Project Thumbnail Path:</label>
                    <input type="text" id="thumbnail" placeholder="projectThumbnail" name="thumbnail">
                </div>
                <div class="addDescription">
                    <label for="description">Project Description:</label>
                    <input type="text" id="description" placeholder="projectDescription" name="description">
                </div>
                <input type="submit" value="Add Project" name="add" id="addBtn">
                <?php addNewProjectToDB($conn); ?>
            </form>
        </section>
    </div>
    <footer>
        <div class="footerContent">
            <div class="copyrightText">
                <p>Copyright &copy; 2014 | Privacy Policy | Green Landscaping</p>
            </div>
            <div class="contactLinks">
                <ul>
                    <li>
                        <a href="#">
                            <img src="./../../assets/images/contactLinks/fb.png" alt="">
                        </a>
                    </li>
                    <li>
                        <a href="#">
                            <img src="./../../assets/images/contactLinks/twitter.png" alt="">
                        </a>
                    </li>
                    <li>
                        <a href="#">
                            <img src="./../../assets/images/contactLinks/pinterest.png" alt="">
                        </a>
                    </li>
                    <li>
                        <a href="#">
                            <img src="./../../assets/images/contactLinks/gplus.png" alt="">
                        </a>
                    </li>
                </ul>
            </div>
        </div>
    </footer>
</div>
</body>
</html>
