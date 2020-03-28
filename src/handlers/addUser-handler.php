<?php
if (isset($_POST['addUser']))
{
    $email = $_POST['addEmail'];
    $confirmEmail = $_POST['confirmEmail'];
    addNewAdmin($conn, $email, $confirmEmail);
}
