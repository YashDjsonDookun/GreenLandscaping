<?php
if (isset($_POST['addProject']))
{
    header("Location: ./src/includes/addProject.php");
}

if (isset($_POST['addUser']))
{
    header("Location: ./src/includes/addUser.php");
}