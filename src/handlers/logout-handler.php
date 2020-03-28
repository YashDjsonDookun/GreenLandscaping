<?php
if (isset($_POST['logoutButton']))
{
    echo "
        <script>
            alert('Logging ". $_SESSION['adminUser'] ." out...');
            window.location = 'projects.php';
        </script>
    ";
    session_destroy();
}
