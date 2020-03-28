<?php
if (isset($_POST['choose']))
{
    $chosenProject = $_POST['lstProjects'];
    $_SESSION['chosen'] = $chosenProject;
    displayInfoInTextbox($conn, $chosenProject);
}
if (isset($_POST['update']))
{
    updateProjectInDatabase($conn);
}

if (isset($_POST['delete']))
{
    deleteProjectFromDatabase($conn);
}
