<?php
if (isset($_POST['loginButton']))
{
    $user = $_POST['loginEmail'];
    if(strlen($user)>0)
    {
        if (filter_var($user, FILTER_VALIDATE_EMAIL))
        {
            if(userAuth($conn, $user))
            {
                $_SESSION['adminUser'] = $user;
                header("Location: controlPanel.php");
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
            <script>alert('Email field cannot be empty!');</script>
        ";
    }
}
