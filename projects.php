<?php
    include("./src/config.php");
    include("./src/includes/fetchFromDatabase.php");
    include("./src/handlers/login-handler.php");
?>
<!DOCTYPE html>
<html>
    <head>
        <title>Green Landscaping - Projects</title>
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
                            <li><a href="./projects.php" style="background-color: #940000;">PROJECTS</a></li>
                        </ul>
                    </div>
                </nav>
            </header>
            <div class="content">
                <section class="top">
                    <form action="projects.php" method="POST">
                        <input type="text" name="loginEmail" placeholder="Log In (for administrator use only)" name="email">
                        <input type="submit" name="loginButton" value="enter email">
                    </form>
                </section>
                <section class="title">
                    <div class="bar">
                        <span id="barLeft"></span>
                    </div>
                    <h1>OUR PROJECTS</h1>
                    <div class="bar">
                        <span id="barRight"></span>
                    </div>
                </section>
                <section class="main">
                    <?php
                        displayOnPage($conn, $sql);
                    ?>
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
