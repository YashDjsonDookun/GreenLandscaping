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
        <title>Green Landscaping - Edit</title>
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
                    <h1>Edit Existing Project</h1>
                    <div class="bar">
                        <span id="barRight"></span>
                    </div>
                </section>
                <section class="main">
                    <form action="editProject.php" method="POST" id="controlPanelForm">
                        <div class="listOfProjects">
                            <select name="lstProjects" id="lstProjects">
                                <?php
                                    populateListbox($conn, $sql);
                                ?>
                            </select>
                            <input type="submit" value="Choose Project" name="choose" id="chooseBtn">
                        </div>
                        <?php include("./../../src/handlers/choose-handler.php"); ?>
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
