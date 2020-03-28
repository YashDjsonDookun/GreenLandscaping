<?php
include("./src/config.php");
include("./src/includes/fetchFromDatabase.php");
include("./src/handlers/login-handler.php");
include("./src/handlers/logout-handler.php");
include("./src/handlers/add-handler.php");
include("./src/handlers/updateProject-handler.php");

if (isset($_SESSION['adminUser']))
{
    $adminUser = $_SESSION['adminUser'];
}
else {
    echo "
        <script>
            alert('You should be Logged In as an Administrator first before accessing the Control Panel!');
            window.location = './projects.php';
        </script>
    ";
}
?>
<!DOCTYPE html>
<html>
    <head>
        <title>Green Landscaping - Control Panel</title>
        <link href="https://fonts.googleapis.com/css?family=Roboto&display=swap" rel="stylesheet">
        <link rel="stylesheet" href="./assets/style/style.css">
    </head>
    <body>
        <div class="wrapper">
            <header>
                <nav>
                    <div class="logo">
                        <img src="./assets/images/logo.png" alt="">
                    </div>
                    <div class="pageLinks">
                        <ul>
                            <li><a href="index.php">HOME</a></li>
                            <li><a href="./projects.php">PROJECTS</a></li>
                            <li><a href="./controlPanel.php" style="background-color: #940000;">CPanel</a></li>
                        </ul>
                    </div>
                </nav>
            </header>
            <div class="content">
                <section class="top">
                    <form action="controlPanel.php" method="POST">
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
                    <h1>Control Panel</h1>
                    <div class="bar">
                        <span id="barRight"></span>
                    </div>
                </section>
                <section class="main">
                    <form action="controlPanel.php" method="POST" id="controlPanelForm">
                        <button value="Add" name="addProject" type="submit">Add New Project</button>
                        <button value="Edit" name="editProject" type="submit">Edit Existing Project</button>
                        <button value="adduser" name="addUser" type="submit">Add New Administrator</button>
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
                                    <img src="./assets/images/contactLinks/fb.png" alt="">
                                </a>
                            </li>
                            <li>
                                <a href="#">
                                    <img src="./assets/images/contactLinks/twitter.png" alt="">
                                </a>
                            </li>
                            <li>
                                <a href="#">
                                    <img src="./assets/images/contactLinks/pinterest.png" alt="">
                                </a>
                            </li>
                            <li>
                                <a href="#">
                                    <img src="./assets/images/contactLinks/gplus.png" alt="">
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>
            </footer>
        </div>
    </body>
</html>
