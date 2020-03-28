<?php
$sql = "SELECT * FROM `projects`;";

function displayOnPage($conn, $sql)
{
    $result = mysqli_query($conn,$sql);

    if (mysqli_num_rows($result) > 0)
    {
        while ($row = mysqli_fetch_array($result)) {
            echo "
                <div class='project'>
                    <img src = '" . $row['projectThumbnail'] . "' alt=''>
                    <h1>" . $row['projectTitle'] . "</h1>
                    <p>" . $row['projectDescription'] . "</p>
                </div>
            ";
        }
    }
    else {
        echo "no results";
    }
}

function populateListbox($conn, $sql)
{
    $result = mysqli_query($conn,$sql);

    if (mysqli_num_rows($result) > 0)
    {
        while ($row = mysqli_fetch_array($result)) {
            echo "
                <option name='".$row['projectTitle']."' value='".$row['projectTitle']."'>".$row['projectTitle']."</option>
            ";
        }
    }
    else {
        echo "no results";
    }
}

function addNewProjectToDB($conn)
{
    if (isset($_POST['add']))
    {
       $title = $_POST['title'];
       $thumbnail = $_POST['thumbnail'];
       $description = $_POST['description'];

       $query = "INSERT INTO `projects` (`projectID`, `projectTitle`, `projectThumbnail`, `projectDescription`) VALUES (NULL, '".$title."','".$thumbnail."', '".$description."')";
        if (mysqli_query($conn, $query)) {
            echo "New record created successfully";
        } else {
            echo "Error: " . $query . "<br>" . mysqli_error($conn);
        }
    }
}

function displayInfoInTextbox($conn, $chosenProject)
{
    $query = "SELECT * FROM `projects` WHERE `projectTitle` ='" . $chosenProject ."';";
    $result = mysqli_query($conn, $query);

    if (mysqli_num_rows($result) > 0)
    {
        while ($row = mysqli_fetch_array($result)) {
            echo "
                <div class=\"addTitle\">
                    <label for=\"title\">Project Title:</label>
                    <input type=\"text\" id=\"title\" value='".$row['projectTitle']."'  name=\"title\">
                </div>
                <div class=\"addThumbnail\">
                    <label for=\"thumbnail\">Project Thumbnail Path:</label>
                    <input type=\"text\" id=\"thumbnail\" value='".$row['projectThumbnail']."'  name=\"thumbnail\">
                </div>
                <div class=\"addDescription\">
                    <label for=\"description\">Project Description:</label>
                    <input type=\"text\" id=\"description\" value='".$row['projectDescription']."'  name=\"description\">
                </div>
                    <input type=\"submit\" value=\"Update Project\" name=\"update\" id=\"updateBtn\">
                   <input type=\"submit\" value=\"Delete Project\" name=\"delete\" id=\"deleteBtn\">
                </div>
           ";
        }
    }
    else {
        echo "no results";
    }
}

function updateProjectInDatabase($conn)
{
    $oldTitle = $_SESSION['chosen'];
    $title = $_POST['title'];
    $thumbnail = $_POST['thumbnail'];
    $description = $_POST['description'];

    $query = "UPDATE `projects` SET `projectTitle` = '".$title."', `projectThumbnail`='".$thumbnail."', `projectDescription` = '".$description."'". " WHERE `projectTitle` = '".$oldTitle."'";
    if (mysqli_query($conn, $query)) {
        echo "New record created successfully";
    } else {
        echo "Error: " . $query . "<br>" . mysqli_error($conn);
    }
}

function deleteProjectFromDatabase($conn)
{
    $oldTitle = $_SESSION['chosen'];
    $query = "DELETE FROM `projects` WHERE `projectTitle`='".$oldTitle."'";
    if (mysqli_query($conn, $query)) {
        echo "Record deleted successfully";
    } else {
        echo "Error deleting record: " . mysqli_error($conn);
    }
}

function userAuth($conn, $email)
{
    $query = "SELECT `adminEmail` FROM `admininstrators` WHERE `adminEmail`= '".$email."'";
    $result = mysqli_query($conn, $query);
    if (mysqli_num_rows($result) > 0)
    {
        return true;
    }
    else {
        echo "
            <script>alert('Email does not exist! Kindly ensure that you are an approved Administrator!');</script>
        ";
        return false;
    }
}

function addNewAdmin($conn, $email, $confirmEmail)
{
    if (isset($_POST['addUser']))
    {
        if ($email == $confirmEmail)
        {
            if (filter_var($email, FILTER_VALIDATE_EMAIL))
            {
                $query = "INSERT INTO `admininstrators` (`adminID`, `adminEmail`) VALUES (NULL, '".$email."')";
                if (mysqli_query($conn, $query)) {
                    echo "
                        <script>alert('New User Added Successfully! You may now login with the new Credentials!');</script>
                    ";
                } else {
                    echo "Error: " . $query . "<br>" . mysqli_error($conn);
                }
            }
            else
            {
                echo "
                    <script>alert('Invalid Email Format! Please try again!');</script>
                ";
            }
        }
        else
        {
            echo "
                <script>alert('Emails Do Not Match!');</script>
            ";
        }
    }
}